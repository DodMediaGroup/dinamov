<?php

class AdminController extends Controller
{

	public $layout='//layouts/layout_admin';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', // Loguin
				'actions'=>array('index','logout'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('home',
					'quienes_somos',
					'como_trabajamos',
					'como_trabajamos_editar',
					'agregar_contenidos',
					'ver_servicios',
					'editar_servicio',
					'subir_imagen',
					'agregar_servicios',
					'ver_blogs',
					'editar_blog',
					'agregar_blogs',
					'eliminar_blog',
					'eliminar_noticia',
					'cambiar_clave',
					'agregar_categoria',
					'ver_noticias',
					'editar_noticia',
					'agregar_noticias',
					'contacto',
					'mensajes',
					'ver_mensaje',
					'contacto',
					'eliminar_como_trabajamos',
					),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$this->layout = '//layouts/login';
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->request->baseUrl.'/admin/quienes_somos/');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}


	public function actionQuienes_somos()
	{
		$quienes_somos= QuienesSomos::model()->findByPk(1);
		if (isset($_POST['mision'])) {
			$quienes_somos->LEYENDA=$_POST['leyenda'];
			$quienes_somos->QUIENES_SOMOS=$_POST['quienes_somos'];
			$quienes_somos->MISION=$_POST['mision'];
			$quienes_somos->VISION=$_POST['vision'];
			if($quienes_somos->update()){
				$this->render('quienes_somos',array(
					'quienes_somos'=>$quienes_somos,
					'mensaje_exito'=>'Se ha actualizado la seccion Quienes Somos'
				));
			}else{
				$this->render('quienes_somos',array(
					'quienes_somos'=>$quienes_somos,
					'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
				));
			}
		}else{
			$this->render('quienes_somos',array(
				'quienes_somos'=>$quienes_somos
			));
		}
	}

	public function actionComo_trabajamos()
	{
		$como_trabajamos=ComoTrabajamos::model()->findAll();
		$this->render('como_trabajamos',array(
			'como_trabajamos'=>$como_trabajamos
		));
	}

	public function actionComo_trabajamos_editar($id)
	{
		if (isset($_POST['id'])) {
			$como_trabajamos=ComoTrabajamos::model()->findByPk($_POST['id']);
			$como_trabajamos->TITULO=$_POST['titulo'];
			$como_trabajamos->DESCRIPCION=$_POST['descripcion'];
			$como_trabajamos->CONTENIDO=$_POST['contenido'];
			if ($como_trabajamos->update()) {
				$this->render('como_trabajamos_editar',array(
					'como_trabajamos'=>$como_trabajamos,
					'mensaje_exito'=>'Se ha actualizado la informacion'
				));
			}else{
				$this->render('como_trabajamos_editar',array(
					'como_trabajamos'=>$como_trabajamos,
					'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
				));
			}
		}else{
			$como_trabajamos=ComoTrabajamos::model()->findByPk($id);
			$this->render('como_trabajamos_editar',array(
				'como_trabajamos'=>$como_trabajamos
			));
		}
	}

	public function actionAgregar_contenidos()
	{
		if (isset($_POST['contenido'])) {
			$como_trabajamos=new ComoTrabajamos;
			$como_trabajamos->ID=0;
			$como_trabajamos->TITULO=$_POST['titulo'];
			$como_trabajamos->DESCRIPCION=$_POST['descripcion'];
			$como_trabajamos->CONTENIDO=$_POST['contenido'];
			if ($como_trabajamos->save()) {
				$this->render('agregar_contenidos',array(
					'mensaje_exito'=>'Se ha actualizado la informacion'
				));
			}else{
				$this->render('agregar_contenidos',array(
					'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
				));
			}
		}else{
			$this->render('agregar_contenidos');
		}
	}

	public function actionVer_servicios()
	{
		$servicios= Servicios::model()->findAll();
		$this->render('ver_servicios',
			array('servicios'=>$servicios)
		);
	}

	public function actionEditar_servicio($id)
	{
		if (isset($_POST['caracteristicas'])) {
			$servicio= Servicios::model()->findByPk($id);
			$servicio->nombre_servicio=$_POST['nombre'];
			$servicio->subtitulo_servicio=$_POST['subtitulo'];
			$servicio->descripcion_servicio= str_replace("	", "", $_POST['descripcion']);
			$servicio->caracteristicas=$_POST['caracteristicas'];
			$nombre_temporal= $_FILES['file']['name'];
			if ($nombre_temporal!="") {
				$servicio->imagen_servicio=Yii::app()->Herramientas->generar_nombre($nombre_temporal);
				if(Yii::app()->Herramientas->guardar_imagen("servicios",$nombre_temporal,$servicio->imagen_servicio)){
					$servicio->imagen_servicio= "images/servicios/".$servicio->imagen_servicio;
					if ($servicio->update()){
						Yii::app()->Herramientas->vaciar_temporales();
						$this->render(
							'editar_servicio',
							array(
								'servicio'=>$servicio,
								'mensaje_exito'=>'Informacion actualizada correctamente'
							)
						);
					}else{
						$servicio= Servicios::model()->findByPk($id);
						$this->render(
							'editar_servicio',
							array(
								'servicio'=>$servicio,
								'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
							)
						);
					}
				}else{
					$servicio= Servicios::model()->findByPk($id);
					$this->render(
						'editar_servicio',
						array(
							'servicio'=>$servicio,
							'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
						)
					);
				}
			}else{
				if ($servicio->update()){
					$this->render(
						'editar_servicio',
						array(
							'servicio'=>$servicio,
							'mensaje_exito'=>'Informacion actualizada correctamente'
						)
					);
				}else{
					$servicio= Servicios::model()->findByPk($id);
					$this->render(
						'editar_servicio',
						array(
							'servicio'=>$servicio,
							'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
						)
					);
				}
			}
		}else{
			$servicio= Servicios::model()->findByPk($id);
			$this->render(
				'editar_servicio',
				array(
					'servicio'=>$servicio
				)
			);
		}
	}

	public function actionSubir_imagen()
	{
		if (isset($_FILES["file"]))
		{
			$resultado= Yii::app()->Herramientas->subir_imagen($_FILES["file"],1000,200,1000,200);
			echo $resultado;
		}else{
			echo 'No hay archivos';
		}
	}

	public function actionAgregar_servicios()
	{
		if (isset($_POST['nombre'])) {
			$servicio= new Servicios;
			$servicio->nombre_servicio=$_POST['nombre'];
			$servicio->subtitulo_servicio=$_POST['subtitulo'];
			$servicio->descripcion_servicio= str_replace("	", "", $_POST['descripcion']);
			$servicio->caracteristicas=$_POST['caracteristicas'];
			$nombre_temporal= $_FILES['file']['name'];
			if ($nombre_temporal!="") {
				$servicio->imagen_servicio=Yii::app()->Herramientas->generar_nombre($nombre_temporal);
				if(Yii::app()->Herramientas->guardar_imagen("servicios",$nombre_temporal,$servicio->imagen_servicio)){
					$servicio->imagen_servicio= "images/servicios/".$servicio->imagen_servicio;
					if ($servicio->save()){
						Yii::app()->Herramientas->vaciar_temporales();
						$this->render(
							'agregar_servicios',
							array(
								'mensaje_exito'=>'Informacion actualizada correctamente'
							)
						);
					}else{
						$this->render(
							'agregar_servicios',
							array(
								'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
							)
						);
					}
				}else{
					$this->render(
						'agregar_servicios',
						array(
							'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
						)
					);
				}
			}else{
				$this->render(
					'agregar_servicios',
					array(
						'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
					)
				);
			}
		}else{
			$this->render(
				'agregar_servicios'
			);
		}
	}

	public function actionVer_blogs()
	{
		$blogs= Blogs::model()->findAll();
		$this->render('ver_blogs', array(
			'blogs'=>$blogs
		));
	}

	public function actionEditar_blog($id)
	{
		$blog= Blogs::model()->findByPk($id);
		if (isset($_POST['titulo'])) {
			$blog->titulo=$_POST['titulo'];
			$blog->contenido=$_POST['contenido'];
			$nombre_temporal= $_FILES['file']['name'];
			if ($nombre_temporal!="") {
				$blog->imagen=Yii::app()->Herramientas->generar_nombre($nombre_temporal);
				if(Yii::app()->Herramientas->guardar_imagen("blogs",$nombre_temporal,$blog->imagen)){
					$blog->imagen= "images/blogs/".$blog->imagen;
					if ($blog->update()){
						Yii::app()->Herramientas->vaciar_temporales();
						$this->render(
							'editar_blog',
							array(
								'blog'=>$blog,
								'mensaje_exito'=>'Informacion actualizada correctamente'
							)
						);
					}else{
						$blog= Blogs::model()->findByPk($id);
						$this->render(
							'editar_blog',
							array(
								'blog'=>$blog,
								'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
							)
						);
					}
				}else{
					$blog= Blogs::model()->findByPk($id);
					$this->render(
						'editar_blog',
						array(
							'blog'=>$blog,
							'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
						)
					);
				}
			}else{
				if ($blog->update()){
					$this->render(
						'editar_blog',
						array(
							'blog'=>$blog,
							'mensaje_exito'=>'Informacion actualizada correctamente'
						)
					);
				}else{
					$blog= Blogs::model()->findByPk($id);
					$this->render(
						'editar_blog',
						array(
							'blog'=>$blog,
							'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
						)
					);
				}
			}
		}else{
			$this->render('editar_blog', array(
				'blog'=>$blog
			));
		}
	}

	public function actionAgregar_blogs()
	{
		$categorias=Categorias::model()->findAll();
		if (isset($_POST['titulo'])) {
			$blog=new Blogs;
			$blog->titulo=$_POST['titulo'];
			$blog->contenido=$_POST['contenido'];
			$blog->id_categoria=$_POST['categoria'];
			$blog->fecha= date("Y-m-d");
			$nombre_temporal= $_FILES['file']['name'];
			if ($nombre_temporal!="") {
				$blog->imagen=Yii::app()->Herramientas->generar_nombre($nombre_temporal);
				if(Yii::app()->Herramientas->guardar_imagen("blogs",$nombre_temporal,$blog->imagen)){
					$blog->imagen= "images/blogs/".$blog->imagen;
					if ($blog->save()){
						Yii::app()->Herramientas->vaciar_temporales();
						$this->render(
							'agregar_blog',
							array(
								"categorias"=>$categorias,
								'mensaje_exito'=>'Informacion actualizada correctamente'
							)
						);
					}else{
						$this->render(
							'agregar_blog',
							array(
								"categorias"=>$categorias,
								'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
							)
						);
					}
				}else{
					$this->render(
						'agregar_blog',
						array(
							"categorias"=>$categorias,
							'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
						)
					);
				}
			}else{
				$this->render(
					'agregar_blog',
					array(
						"categorias"=>$categorias,
						'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
					)
				);
			}
		}else{
			$this->render('agregar_blog',array("categorias"=>$categorias));
		}
	}

	public function actionAgregar_categoria()
	{
		$nombre=$_GET['nombre'];
		$categoria=new Categorias;
		$categoria->nombre=$nombre;
		if ($categoria->save()) {
			$categorias=Categorias::model()->findAll();
			echo CJSON::encode($categorias);
		}else{
			#Error
			$categorias=Categorias::model()->findAll();
			echo CJSON::encode($categorias);
		}
	}

	public function actionVer_noticias()
	{
		$noticias= Noticias::model()->findAll();
		$this->render('ver_noticias', array(
			'noticias'=>$noticias
		));
	}

	public function actionEditar_noticia($id)
	{
		$noticia= Noticias::model()->findByPk($id);
		if (isset($_POST['titulo'])) {
			$noticia->titulo=$_POST['titulo'];
			$noticia->contenido=$_POST['contenido'];
			$nombre_temporal= $_FILES['file']['name'];
			if ($nombre_temporal!="") {
				$noticia->imagen=Yii::app()->Herramientas->generar_nombre($nombre_temporal);
				if(Yii::app()->Herramientas->guardar_imagen("Noticias",$nombre_temporal,$noticia->imagen)){
					$noticia->imagen= "images/Noticias/".$noticia->imagen;
					if ($noticia->update()){
						Yii::app()->Herramientas->vaciar_temporales();
						$this->render(
							'editar_noticia',
							array(
								'noticia'=>$noticia,
								'mensaje_exito'=>'Informacion actualizada correctamente'
							)
						);
					}else{
						$noticia= Noticias::model()->findByPk($id);
						$this->render(
							'editar_noticia',
							array(
								'noticia'=>$noticia,
								'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
							)
						);
					}
				}else{
					$noticia= Noticias::model()->findByPk($id);
					$this->render(
						'editar_noticia',
						array(
							'noticia'=>$noticia,
							'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
						)
					);
				}
			}else{
				if ($noticia->update()){
					$this->render(
						'editar_noticia',
						array(
							'noticia'=>$noticia,
							'mensaje_exito'=>'Informacion actualizada correctamente'
						)
					);
				}else{
					$noticia= Noticias::model()->findByPk($id);
					$this->render(
						'editar_noticia',
						array(
							'noticia'=>$noticia,
							'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
						)
					);
				}
			}
		}else{
			$this->render('editar_noticia', array(
				'noticia'=>$noticia
			));
		}
	}



	public function actionAgregar_noticias()
	{
		$categorias=Categorias::model()->findAll();
		if (isset($_POST['titulo'])) {
			$noticia=new Noticias;
			$noticia->titulo=$_POST['titulo'];
			$noticia->contenido=$_POST['contenido'];
			$noticia->id_categoria=$_POST['categoria'];
			$noticia->fecha= date("Y-m-d");
			$nombre_temporal= $_FILES['file']['name'];
			if ($nombre_temporal!="") {
				$noticia->imagen=Yii::app()->Herramientas->generar_nombre($nombre_temporal);
				if(Yii::app()->Herramientas->guardar_imagen("noticias",$nombre_temporal,$noticia->imagen)){
					$noticia->imagen= "images/noticias/".$noticia->imagen;
					if ($noticia->save()){
						Yii::app()->Herramientas->vaciar_temporales();
						$this->render(
							'agregar_noticia',
							array(
								"categorias"=>$categorias,
								'mensaje_exito'=>'Noticia almacenada y publicada'
							)
						);
					}else{
						$this->render(
							'agregar_noticia',
							array(
								"categorias"=>$categorias,
								'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
							)
						);
					}
				}else{
					$this->render(
						'agregar_noticia',
						array(
							"categorias"=>$categorias,
							'mensaje_error'=>'No se logro almacenar la imagen. Favor verifique sus datos'
						)
					);
				}
			}else{
				$this->render(
					'agregar_noticia',
					array(
						"categorias"=>$categorias,
						'mensaje_error'=>'No se logro completar la operacion. Favor verifique sus datos'
					)
				);
			}
		}else{
			$this->render('agregar_noticia',array("categorias"=>$categorias));
		}
	}

	public function actionContacto()
	{
		$contacto= Contacto::model()->findByPk(1);
		if (isset($_POST['direccion'])) {
			$contacto->DIRECCION= $_POST['direccion'];
			$contacto->TELEFONOS= $_POST['telefono'];
			$contacto->CORREO= $_POST['correo'];
			$contacto->HORARIO= $_POST['horario'];
			$contacto->FACEBOOK= $_POST['facebook'];
			$contacto->TWITTER= $_POST['twitter'];
			if ($contacto->save()) {
				$this->render('contacto',array(
					'mensaje_exito'=>'Informacion actualizada correctamente',
					'contacto'=>$contacto
				));
			}else{
				$this->render('contacto',array(
					'mensaje_error'=>'No se logro completar la operacion',
					'contacto'=>$contacto
				));
			}
		}else{
			$this->render('contacto',array(
				'contacto'=>$contacto
			));
		}
	}


	public function actionMensajes()
	{
		$criteria=new CDbCriteria;
        $criteria->order='ID_MENSAJE DESC';
		$model= Mensajes::model()->findAll($criteria);
		$this->render('mensajes',array('mensajes'=>$model));
	}

	public function actionVer_mensaje($id)
	{
		$model= Mensajes::model()->findByPk($id);
		if(is_null($model)){
			$this->redirect(Yii::app()->request->baseUrl.'/admin/mensajes');
		}else{
			$model->ESTADO=1;
			$model->update();
			$this->render('ver_mensaje',array('model'=>$model));
		}
	}

	public function actionEliminar_como_trabajamos($id)
	{
		$contenido= ComoTrabajamos::model()->findByPk($id);
		if (!is_null($contenido)) {
			if($contenido->delete()){
				$como_trabajamos=ComoTrabajamos::model()->findAll();
				$this->render('como_trabajamos',array(
					'mensaje_exito'=>'Contenido eliminado correctamente',
					'como_trabajamos'=>$como_trabajamos
				));
			}else{
				$como_trabajamos=ComoTrabajamos::model()->findAll();
				$this->render('como_trabajamos',array(
					'mensaje_error'=>'No se logro completar la operacion',
					'como_trabajamos'=>$como_trabajamos
				));
			}
		}else{
			$como_trabajamos=ComoTrabajamos::model()->findAll();
			$this->render('como_trabajamos',array(
				'mensaje_error'=>'No se logro completar la operacion',
				'como_trabajamos'=>$como_trabajamos
			));
		}
	}

	public function actionEliminar_blog($id)
	{
		$blog= Blogs::model()->findByPk($id);
		if (!is_null($blog)) {
			if($blog->delete()){
				$ver_blogs=Blogs::model()->findAll();
				$this->render('ver_blogs',array(
					'mensaje_exito'=>'Blog eliminado correctamente',
					'blogs'=>$ver_blogs
				));
			}else{
				$ver_blogs=Blogs::model()->findAll();
				$this->render('ver_blogs',array(
					'mensaje_error'=>'No se logro completar la operacion',
					'blogs'=>$ver_blogs
				));
			}
		}else{
			$ver_blogs=Blogs::model()->findAll();
			$this->render('ver_blogs',array(
				'mensaje_error'=>'No se logro completar la operacion',
				'blogs'=>$ver_blogs
			));
		}
	}

	public function actionEliminar_noticia($id)
	{
		$noticia= Noticias::model()->findByPk($id);
		if (!is_null($noticia)) {
			if($noticia->delete()){
				$ver_noticias=Noticias::model()->findAll();
				$this->render('ver_noticias',array(
					'mensaje_exito'=>'Noticia eliminada correctamente',
					'noticias'=>$ver_noticias
				));
			}else{
				$ver_noticias=Noticias::model()->findAll();
				$this->render('ver_noticias',array(
					'mensaje_error'=>'No se logro completar la operacion',
					'noticias'=>$ver_noticias
				));
			}
		}else{
			$ver_noticias=Noticias::model()->findAll();
			$this->render('ver_noticias',array(
				'mensaje_error'=>'No se logro completar la operacion',
				'noticias'=>$ver_noticias
			));
		}
	}

	public function actionCambiar_clave()
	{
		if(isset($_POST['PasswordForm'])){
			$pass_model=new PasswordForm;
			$pass_model->attributes= $_POST['PasswordForm'];

			if($pass_model->validate()){
				$model= TblUser::model()->findByPk(Yii::app()->user->id);
				if(sha1($pass_model->pass_actual)==$model->password){
					if($pass_model->nuevo_pass_1==$pass_model->nuevo_pass_2){
						$model->password= sha1($pass_model->nuevo_pass_1);
						if($model->update()){
							$pass_model=new PasswordForm;
							$this->render('cambiar_clave', array('model'=>$pass_model,'mensaje_exito'=>'La contrasenia ha sido cambiada'));	
						}else{
							$this->render('cambiar_clave', array('model'=>$pass_model,'mensaje_error'=>'No se pudo completar la operacion'));
						}	
					}else{
						$this->render('cambiar_clave', array('model'=>$pass_model,'mensaje_error'=>'La nueva contrasenia no coincide en los dos campos'));
					}
				}else{
					$this->render('cambiar_clave', array('model'=>$pass_model,'mensaje_error'=>'La contrasenia anterior ingresada no coincide'));
				}
			}else{
				$this->render('cambiar_clave', array('model'=>$pass_model,'mensaje_error'=>'No se pudo completar la operacion'));
			}
			
		}else{
			$model= new PasswordForm;
			$this->render('cambiar_clave', array('model'=>$model));
		}
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->request->baseUrl.'/login');
	}
}
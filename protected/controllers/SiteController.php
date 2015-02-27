<?php

class SiteController extends Controller
{

	public $layout='//layouts/layout';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$aplicaciones= Aplicacion::model()->findAll();
		$noticias= Noticias::model()->findAll(array("order"=>"t.fecha DESC","limit"=>"2"));
		$blogs= Blogs::model()->findAll(array("order"=>"t.fecha DESC","limit"=>"2"));
		$this->pageTitle="Bienvenido a Dinamov";
		$this->render('index',array(
			'blogs'=>$blogs,
			'noticias'=>$noticias,
			'aplicaciones'=>$aplicaciones
		));
	}

	public function actionNoticias()
	{
		$criteria=new CDbCriteria;
        $criteria->order='fecha DESC';
		$noticias= Noticias::model()->findAll($criteria);
		$this->pageTitle="Noticias | Dinamov";
		$this->render('noticias',array(
			'noticias'=>$noticias
		));
	}

	public function actionBlogs()
	{
		$criteria=new CDbCriteria;
        $criteria->order='fecha DESC';
		$blogs= Blogs::model()->findAll($criteria);
		$this->pageTitle="Blogs | Dinamov";
		$this->render('blogs',array(
			'blogs'=>$blogs
		));
	}

	public function actionVer_noticia($id)
	{
		//$id=explode('-',$identificador);
		$blog= Noticias::model()->findByPk($id);
		$this->pageTitle=$blog->titulo." | Dinamov";
		$this->render('vista_noticia',array(
			'post'=>$blog
		));
	}

	public function actionVer_blog($id)
	{
		//$id=explode('-',$identificador);
		$blog= Blogs::model()->findByPk($id);
		$this->pageTitle=$blog->titulo." | Dinamov";
		$this->render('vista_blog',array(
			'post'=>$blog
		));
	}

	public function actionQuienes_somos()
	{
		$quienesSomos= QuienesSomos::model()->findByPk(1);
		$tipsqs= TipsQs::model()->findAll();
		$this->pageTitle="Quienes somos | Dinamov";
		$this->render('quienes-somos', array(
			'quienesSomos'=>$quienesSomos,
			'tipsQs'=>$tipsqs
		));
	}

	public function actionComo_trabajamos()
	{
		$comoTrabajamos= ComoTrabajamos::model()->findAll();
		$this->pageTitle="Como trabajamos | Dinamov";
		$this->render('como-trabajamos', array(
			'comoTrabajamos'=>$comoTrabajamos
		));
	}

	public function actionServicios($id="")
	{
		$servicios= Servicios::model()->findAll();
		$aplicaciones= Aplicacion::model()->findAll();
		$this->pageTitle="Servicios | Dinamov";
		if ($id!="") {
			$cadena= split("_", $id);
			$servicio= $cadena[0];
			$aplicacion= $cadena[1];
			$this->render('servicios', array(
				'servicios'=>$servicios,
				'aplicaciones'=>$aplicaciones,
				'app_seleccionada'=>$aplicacion,
				'servicio_seleccionado'=>$servicio
			));

		}else{
			$this->render('servicios', array(
				'servicios'=>$servicios,
				'aplicaciones'=>$aplicaciones
			));
		}
		
	}

	public function actionContacto()
	{
		$model= new Mensajes;

		if(isset($_POST['nombres'])){
			$model->NOMBRES=$_POST['nombres'];
			$model->CORREO=$_POST['correo'];
			$model->TELEFONO=$_POST['telefono'];
			$model->MENSAJE=$_POST['mensaje'];
			$model->ESTADO=0;
			$model->FECHA= date("y-m-d");
			if($model->validate()){
				if($model->save()){
					$contacto= Contacto::model()->findByPk(1);
					$this->pageTitle="Contacto | Dinamov";
					$this->render('contacto',array('contacto'=>$contacto,'mensaje_exito'=>'Hemos recibido tu mensaje'));
				}else{
					$contacto= Contacto::model()->findByPk(1);
					$this->pageTitle="Contacto | Dinamov";
					$this->render('contacto',array('contacto'=>$contacto,'mensaje_error'=>'No se puede almacenar el mensaje. Favor verifique sus datos'));
				}
			}else{
				$contacto= Contacto::model()->findByPk(1);
				$this->pageTitle="Contacto | Dinamov";
				$this->render('contacto',array('contacto'=>$contacto,'mensaje_error'=>'No se puede enviar el mensaje. Favor verifique sus datos'));
			}
		}else{
			$contacto= Contacto::model()->findByPk(1);
			$this->pageTitle="Contacto | Dinamov";
			$this->render('contacto', array(
				'contacto'=>$contacto
			));
		}
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->render("error");
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->redirect(Yii::app()->request->baseUrl.'/admin/index');
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
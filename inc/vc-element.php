<?php


//banner section

vc_map( array(
	"name" => __( "Main Slider", "project2" ), 
	"base" => "main_slider",
	"category" => __( "industrious", "project2"),
	"params" => array(

	
		array(
		"type" => "textfield",
		"heading" => __( "Give Title", "project2" ),
		"param_name" => "slider_title",
		), 
		array(
		"type" => "textfield",
		"heading" => __( "Sub Title", "project2" ),
		"param_name" => "slider_text",
		), 
		array(
		"type" => "textfield",
		"heading" => __( "Slider theme link", "project2" ),
		"param_name" => "slider_link",
		), 
		array(
		"type" => "textarea",
		"heading" => __( "Content", "project2" ),
		"param_name" => "slider_cont",
		), 
	


),

) );

// this is text 1 
vc_map(array(

'name'		=>__('project2_icon','project2'),
'description'=> 'the is text',
'base'	=>'texticon',
'icon'	=> 'fa fa-map',
'category'=>'project2',
'params'	=> array(
		array(
		'param_name'		=> 'icon_p',
		'type'				=> 'iconpicker',
		'heading'			=> 'this is text'
		),
		array(
		'param_name'		=> 'icon_text_p',
		'type'				=> 'textfield',
		'heading'			=> 'this is text'
		),
			array(
		'param_name'		=> 'icon_text_d',
		'type'				=> 'textarea',
		'heading'			=> 'this is des'
		),


)
));




vc_map( array(
"name" => __( "service section", "ion" ), 
"base" => "service_section",
"category" => __( "ion", "ion"),
"params" => array(
	array(
	"type" => "textfield",
	"heading" => __( "Section Title", "ion" ),
	"param_name" => "ser_titt",
		), 
	array(
	"type" => "textarea",
	"heading" => __( "Section Content", "ion" ),
	"param_name" => "ser_contt",
	), 

	array(
	'type'=>'param_group',
	'heading'=>'Service Section Group',
	'param_name'=>'ser_sec_group',
			'params'=>array(
		array(
		"type" => "iconpicker",
		"heading" => __( "Upload Your icon", "ion" ),
		"param_name" => "service_icon",
		), 
		array(
		"type" => "textfield",
		"heading" => __( "Give Title", "ion" ),
		"param_name" => "service_tit",
		), 
		array(
		"type" => "textarea",
		"heading" => __( "Field Content", "ion" ),
		"param_name" => "service_cont",
		), 

),
),
)
) );


// for comodo work


vc_map(array(

'name'			=>	__('team','project2'),
'description'	=>	'this is icon',
'base'			=>	'comodo_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'comot_heading',
	'type'				=>	'textfield',
	'heading'			=>	'heading icon text'
	),
		array(
	'param_name'		=>	'comod_des',
	'type'				=>	'textarea',
	'heading'			=>	'des icon text'
	),
		array(
	'param_name'		=>	'como_work_p',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));



// for molls work


vc_map(array(

'name'			=>	__('molls','project2'),
'description'	=>	'this is icon',
'base'			=>	'molls_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'molls_work_p',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));

//molls 2nd
vc_map(array(

'name'			=>	__('molls2','project2'),
'description'	=>	'this is icon',
'base'			=>	'molls2_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'molls2_work_t',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
			array(
	'param_name'		=>	'molls2_work_c',
	'type'				=>	'textarea',
	'heading'			=>	'heading recent text'
	),
	)
));


// this is text 1 
vc_map(array(

'name'		=>__('project2_icon','project2'),
'description'=> 'the is text',
'base'	=>'texticon',
'icon'	=> 'fa fa-map',
'category'=>'project2',
'params'	=> array(
		array(
		'param_name'		=> 'icon_p',
		'type'				=> 'iconpicker',
		'heading'			=> 'this is text'
		),
		array(
		'param_name'		=> 'icon_text_p',
		'type'				=> 'textfield',
		'heading'			=> 'this is text'
		),
			array(
		'param_name'		=> 'icon_text_d',
		'type'				=> 'textarea',
		'heading'			=> 'this is des'
		),


)
));


// comodo 2nd part


vc_map( array(
"name" => __( "faisal section", "ion" ), 
"base" => "faisal_section",
"category" => __( "ion", "ion"),
"params" => array(
	array(
	"type" => "textfield",
	"heading" => __( "Section Title", "ion" ),
	"param_name" => "faisal_titt",
		), 


	array(
	'type'=>'param_group',
	'heading'=>'Service Section Group',
	'param_name'=>'faisal_sec_group',
			'params'=>array(
		
		array(
		"type" => "textfield",
		"heading" => __( "Give Title", "ion" ),
		"param_name" => "faisal_tit",
		), 
		

),
),
)
) );

// footer 1st part


vc_map( array(
"name" => __( "footer section", "ion" ), 
"base" => "footer_section",
"category" => __( "ion", "project2"),
"params" => array(
	array(
	"type" => "textfield",
	"heading" => __( "Section Title", "ion" ),
	"param_name" => "footer_titt",
		), 


	array(
	'type'=>'param_group',
	'heading'=>'Service Section Group',
	'param_name'=>'footer_sec_group',
			'params'=>array(
		
		array(
		"type" => "textfield",
		"heading" => __( "Give Title", "ion" ),
		"param_name" => "footer_tit",
		), 
		

),
),
)
) );



// this is text 1 
vc_map(array(

'name'		=>__('footer_text','project2'),
'description'=> 'the is text',
'base'	=>'footericon',
'icon'	=> 'fa fa-map',
'category'=>'project2',
'params'	=> array(
	
		array(
		'param_name'		=> 'footer_text_p',
		'type'				=> 'textfield',
		'heading'			=> 'this is text'
		),
			array(
		'param_name'		=> 'footer_text_d',
		'type'				=> 'textarea',
		'heading'			=> 'this is des'
		),


)
));


?>
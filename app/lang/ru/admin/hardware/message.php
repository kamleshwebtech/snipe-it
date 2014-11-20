<?php

return array(

    'undeployable' 		=> '<strong>Внимание: </strong> Этот актив в настоящее время помечен как не подлежащий установке.
                        Если этот статус изменился , пожалуйста обновите статус актива.',
    'does_not_exist' 	=> 'Актив не существует.',
    'assoc_users'	 	=> 'Этот актив в настоящее время привязан к пользователю и не может быть удален. Пожалуйста сначала снимите привязку, и затем попробуйте удалить снова. ',

    'create' => array(
        'error'   		=> 'Актив не был создан, пожалуйста попробуйте снова. :(',
        'success' 		=> 'Актив успешно создан. :)'
    ),

    'update' => array(
        'error'   		=> 'Актив не был изменен, пожалуйста попробуйте снова',
        'success' 		=> 'Актив успешно изменен.'
    ),

    'delete' => array(
        'confirm'   	=> 'Вы уверены что хотите удалить этот актив?',
        'error'   		=> 'При удалении актива возникла проблема. Пожалуйста попробуйте снова.',
        'success' 		=> 'Актив был успешно удален.'
    ),

    'checkout' => array(
        'error'   		=> 'Актив не был привязан, пожалуйста попробуйте снова',
        'success' 		=> 'Актив успешно привязан.',
        'user_does_not_exist' => 'Этот пользователь является недопустимым. Пожалуйста, попробуйте еще раз.'
    ),

    'checkin' => array(
        'error'   		=> 'Актив не был отвязан, пожалуйста попробуйте снова',
        'success' 		=> 'Актив успешно отвязан.',
        'user_does_not_exist' => 'Этот пользователь является недопустимым. Пожалуйста, попробуйте еще раз.'
    )

);

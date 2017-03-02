<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'Cuenta creada correctamente';
$lang['account_creation_unsuccessful']          = 'No se puede crear la cuenta';
$lang['account_creation_duplicate_email']       = 'Correo ya utilizado o inválido';
$lang['account_creation_duplicate_identity']    = 'Identidad ya utilizada o inválida';
$lang['account_creation_missing_default_group'] = 'Grupo por defecto no definido';
$lang['account_creation_invalid_default_group'] = 'Nombre del grupo por defecto no válido';


// Password
$lang['password_change_successful']          = 'Clave correctamente cambiada';
$lang['password_change_unsuccessful']        = 'No es posible cambiar la clave';
$lang['forgot_password_successful']          = 'Reinicio de clave enviada por correo';
$lang['forgot_password_unsuccessful']        = 'No se puede reiniciar la clave';

// Activation
$lang['activate_successful']                 = 'Cuenta activada';
$lang['activate_unsuccessful']               = 'No se puede activar la cuenta';
$lang['deactivate_successful']               = 'Cuenta desactivada';
$lang['deactivate_unsuccessful']             = 'No se puede desactivar la cuenta';
$lang['activation_email_successful']         = 'Activation Email Sent';
$lang['activation_email_unsuccessful']       = 'No se puede enviar la activación por correo';

// Login / Logout
$lang['login_successful']                    = 'Acceso correcto';
$lang['login_unsuccessful']                  = 'Acceso incorrecto';
$lang['login_unsuccessful_not_active']       = 'Cuenta inactiva';
$lang['login_timeout']                       = 'Bloqueo temporal. Inténtelo mas tarde.';
$lang['logout_successful']                   = 'Desconectado correctamente';

// Account Changes
$lang['update_successful']                   = 'Información de la cuenta actualizada correctamente';
$lang['update_unsuccessful']                 = 'No se puede actulizar la infromación de la cuenta';
$lang['delete_successful']                   = 'Usuario borrado';
$lang['delete_unsuccessful']                 = 'No se puede borrar el usuario';

// Groups
$lang['group_creation_successful']           = 'Grupo creado correctamente';
$lang['group_already_exists']                = 'Ya exsite el nombre del grupo';
$lang['group_update_successful']             = 'Actualizados detalles del grupo';
$lang['group_delete_successful']             = 'Grupo borrado';
$lang['group_delete_unsuccessful']           = 'No se puede borrar el grupo';
$lang['group_delete_notallowed']             = 'No se puede borrar el grupo de administradores';
$lang['group_name_required']                 = 'El nombre del grupo es obligatorio';
$lang['group_name_admin_not_alter']          = 'El nombre del grupo Admin no se puede cambiar';

// Activation Email
$lang['email_activation_subject']            = 'Activación de la cuenta';
$lang['email_activate_heading']              = 'Activación de la cuenta para %s';
$lang['email_activate_subheading']           = 'Haga clic en este enlace para %s.';
$lang['email_activate_link']                 = 'Activar su cuenta';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Verificación de clave olvidada';
$lang['email_forgot_password_heading']       = 'Reinicio de clave para %s';
$lang['email_forgot_password_subheading']    = 'Haga clic en este enlace para %s.';
$lang['email_forgot_password_link']          = 'Reiniciar su clave';

// New Password Email
$lang['email_new_password_subject']          = 'Nueva clave';
$lang['email_new_password_heading']          = 'Nueva clave para %s';
$lang['email_new_password_subheading']       = 'Su clave se ha cambiado a: %s';

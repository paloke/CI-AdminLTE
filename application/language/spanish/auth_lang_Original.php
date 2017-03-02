<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Acceder';
$lang['login_subheading']      = 'Por favor, entre con su usuario/correo y la clave a continuación.';
$lang['login_identity_label']  = 'Correo/Usuario:';
$lang['login_password_label']  = 'Clave:';
$lang['login_remember_label']  = 'Recordarme:';
$lang['login_submit_btn']      = 'Acceder';
$lang['login_forgot_password'] = '¿Ha olvidado la clave?';

// Index
$lang['index_heading']           = 'Usuarios';
$lang['index_subheading']        = 'Debajo la lista de los usuarios.';
$lang['index_fname_th']          = 'Nombre';
$lang['index_lname_th']          = 'Apellido';
$lang['index_email_th']          = 'Correo';
$lang['index_groups_th']         = 'Grupos';
$lang['index_status_th']         = 'Estado';
$lang['index_action_th']         = 'Acción';
$lang['index_active_link']       = 'Activo';
$lang['index_inactive_link']     = 'Inactivo';
$lang['index_create_user_link']  = 'Crear nuevo usuario';
$lang['index_create_group_link'] = 'Crear nuevo grupo';

// Deactivate User
$lang['deactivate_heading']                  = 'Desactivar Usuario';
$lang['deactivate_subheading']               = 'Seguro que quiere desactivar el usuario \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Si:';
$lang['deactivate_confirm_n_label']          = 'No:';
$lang['deactivate_submit_btn']               = 'Enviar';
$lang['deactivate_validation_confirm_label'] = 'confirmación';
$lang['deactivate_validation_user_id_label'] = 'ID Usuario';

// Create User
$lang['create_user_heading']                           = 'Crear usuario';
$lang['create_user_subheading']                        = 'Por favor, a continuación introduzca los datos del usuario.';
$lang['create_user_fname_label']                       = 'Nombre:';
$lang['create_user_lname_label']                       = 'Apellido:';
$lang['create_user_company_label']                     = 'Empresa:';
$lang['create_user_email_label']                       = 'Correo:';
$lang['create_user_phone_label']                       = 'Teléfono:';
$lang['create_user_password_label']                    = 'Clave:';
$lang['create_user_password_confirm_label']            = 'Confirme la clave:';
$lang['create_user_submit_btn']                        = 'Crear usuario';
$lang['create_user_validation_fname_label']            = 'Nombre';
$lang['create_user_validation_lname_label']            = 'Apellido';
$lang['create_user_validation_email_label']            = 'Correo';
$lang['create_user_validation_phone_label']            = 'Teléfono';
$lang['create_user_validation_company_label']          = 'Empresa';
$lang['create_user_validation_password_label']         = 'Clave';
$lang['create_user_validation_password_confirm_label'] = 'Confimación de la clave';

// Edit User
$lang['edit_user_heading']                           = 'Editar usuario';
$lang['edit_user_subheading']                        = 'Por favor, a continuación introduzca los datos del usuario.';
$lang['edit_user_fname_label']                       = 'Nombre:';
$lang['edit_user_lname_label']                       = 'Apellido:';
$lang['edit_user_company_label']                     = 'Empresa:';
$lang['edit_user_email_label']                       = 'Correo:';
$lang['edit_user_phone_label']                       = 'Teléfono:';
$lang['edit_user_password_label']                    = 'Clave: (si quiere cambiarla)';
$lang['edit_user_password_confirm_label']            = 'Confirme la clave: (si quiere cambiarla)';
$lang['edit_user_groups_heading']                    = 'miembro de los grupos';
$lang['edit_user_submit_btn']                        = 'Guardar usuario';
$lang['edit_user_validation_fname_label']            = 'Nombre';
$lang['edit_user_validation_lname_label']            = 'Apellido';
$lang['edit_user_validation_email_label']            = 'Correo';
$lang['edit_user_validation_phone_label']            = 'Teléfono';
$lang['edit_user_validation_company_label']          = 'Empresa';
$lang['edit_user_validation_groups_label']           = 'Grupos';
$lang['edit_user_validation_password_label']         = 'Clave';
$lang['edit_user_validation_password_confirm_label'] = 'Confirmación de la clave';

// Create Group
$lang['create_group_title']                  = 'Crear Grupo';
$lang['create_group_heading']                = 'Crear Grupo';
$lang['create_group_subheading']             = 'Introduzca los datos del grupo a continuación.';
$lang['create_group_name_label']             = 'Nombre:';
$lang['create_group_desc_label']             = 'Descripción:';
$lang['create_group_submit_btn']             = 'Crear Grupo';
$lang['create_group_validation_name_label']  = 'Nombre del Grupo';
$lang['create_group_validation_desc_label']  = 'Descripción';

// Edit Group
$lang['edit_group_title']                  = 'Editar Grupo';
$lang['edit_group_saved']                  = 'Grupo guardado';
$lang['edit_group_heading']                = 'Editar Grupo';
$lang['edit_group_subheading']             = 'Introduzca los datos del grupo a continuación.';
$lang['edit_group_name_label']             = 'Nombre:';
$lang['edit_group_desc_label']             = 'Descripción:';
$lang['edit_group_submit_btn']             = 'Guardar Grupo';
$lang['edit_group_validation_name_label']  = 'Nombre del Grupo';
$lang['edit_group_validation_desc_label']  = 'Descripción';

// Change Password
$lang['change_password_heading']                               = 'Cambiar Clave';
$lang['change_password_old_password_label']                    = 'Clave antigua:';
$lang['change_password_new_password_label']                    = 'Clave nueva; (mínmo de %s caracteres) ';
$lang['change_password_new_password_confirm_label']            = 'Confirmar nueva clave:';
$lang['change_password_submit_btn']                            = 'Cambiar';
$lang['change_password_validation_old_password_label']         = 'Clave Antigua';
$lang['change_password_validation_new_password_label']         = 'Clave Nueva';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirmar nueva clave';

// Forgot Password
$lang['forgot_password_heading']                 = 'Clave olvidada';
$lang['forgot_password_subheading']              = 'Por favor, intrudizca su %s para enviarle un correo de reinicio de clave.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Enviar';
$lang['forgot_password_validation_email_label']  = 'Correo';
$lang['forgot_password_identity_label']          = 'Usuario';
$lang['forgot_password_email_identity_label']    = 'Correo';
$lang['forgot_password_email_not_found']         = 'No se ha encontrado ese correo.';

// Reset Password
$lang['reset_password_heading']                               = 'Cambiar clave';
$lang['reset_password_new_password_label']                    = 'Clave nueva: (mínmo de %s caracteres) ';
$lang['reset_password_new_password_confirm_label']            = 'Confirmar nueva clave:';
$lang['reset_password_submit_btn']                            = 'Cambiar';
$lang['reset_password_validation_new_password_label']         = 'Clave Nueva';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirmar nueva clave';

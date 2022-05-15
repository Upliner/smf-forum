<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Registration Agreement';
$txt['agreement_agree'] = 'I accept the terms of the agreement.';
$txt['agreement_agree_coppa_above'] = 'I accept the terms of the agreement and I am at least %1$d years old.';
$txt['agreement_agree_coppa_below'] = 'I accept the terms of the agreement and I am younger than %1$d years old.';

// Registration form.
$txt['registration_form'] = 'Registration Form';
$txt['need_username'] = 'Ви не ввели ім\'я користувача.';
$txt['no_password'] = 'Ви не ввели пароль.';
$txt['incorrect_password'] = 'Невірний пароль';
$txt['choose_username'] = 'Ім\'я користувача';
$txt['maintain_mode'] = 'Технічне обслуговування';
$txt['registration_successful'] = 'Реєстрація пройшла успішно!';
$txt['now_a_member'] = 'Поздоровляємо! Тепер Ви зареєстровані на форумі.';
// Use numeric entities in the below string.
$txt['your_password'] = 'і Ваш пароль';
$txt['valid_email_needed'] = 'Будь ласка, введіть дійсну email адресу, %s.';
$txt['required_info'] = 'Необхідна інформація';
$txt['identification_by_smf'] = 'Буде використана тільки для ідентифікації форумом.';
$txt['additional_information'] = 'Additional Information';
$txt['warning'] = 'Увага!';
$txt['only_members_can_access'] = 'Тільки зареєстровані користувачі мають доступ у цей розділ.';
$txt['login_below'] = 'Будь ласка, увійдіть або';
$txt['register_an_account'] = 'register an account';
$txt['login_with_forum'] = 'на ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Ви можете змінити це після того як увійдете в настроювання Вашого профілю, або відвідаєте цю сторінку після входу:';
$txt['your_username_is'] = 'Ім\'я користувача: ';

$txt['login_hash_error'] = 'Політика паролів була змінена. Будь ласка, змініть Ваш пароль.';

$txt['ban_register_prohibited'] = 'Вибачите, Вам заборонено реєструватися на цьому форумі.';
$txt['under_age_registration_prohibited'] = 'Вибачте, але користувачам, які не досягли %d років не дозволено реєструватися на цьому форумі.';

$txt['activate_account'] = 'Активація облікового запису';
$txt['activate_success'] = 'Ваш обліковий запис вдало активований. Ви можете увійти на форум.';
$txt['activate_not_completed1'] = 'Ваша email адреса повинна бути перевірена, перш, ніж Ви зможете увійти.';
$txt['activate_not_completed2'] = 'Відправити повторно лист для активації?';
$txt['activate_after_registration'] = 'Дякуємо за реєстрацію. Через декілька хвилин Ви отримаєте листа з посиланням для активації Вашого облікового запису.';
$txt['invalid_userid'] = 'Користувач не існує';
$txt['invalid_activation_code'] = 'Неправильний код активації';
$txt['invalid_activation_username'] = 'Ім\'я користувача або email';
$txt['invalid_activation_new'] = 'Якщо Ви зареєструвалися і вказали неправильну email адресу, напишіть нову і вкажіть Ваш пароль.';
$txt['invalid_activation_new_email'] = 'Нова email адреса';
$txt['invalid_activation_password'] = 'Старий пароль';
$txt['invalid_activation_resend'] = 'Відправити повторно код активації';
$txt['invalid_activation_known'] = 'Якщо Ви знаєте Ваш код активації, будь ласка, наберіть його тут.';
$txt['invalid_activation_retry'] = 'Код активації';
$txt['invalid_activation_submit'] = 'Активувати';

$txt['coppa_no_concent'] = 'Адміністратор ще не одержав згоди на Вашу реєстрацію від батьків/опікуна.';
$txt['coppa_need_more_details'] = 'Потрібні докладні деталі?';

$txt['awaiting_delete_account'] = 'Ваш обліковий запис був відзначений на видалення!<br />Якщо Ви хочете відновити Ваш обліковий запис, будь ласка, реактивируйте Ваш обліковий запис. відзначивши &quot;Активувати мій обліковий запис&quot; і ввійдіть знову.';
$txt['undelete_account'] = 'Активувати мій обліковий запис';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Інформація про новий пароль';
$txt['change_password_login'] = 'Інформація для входу на';
$txt['change_password_new'] = 'був змінений і пароль знищений. Нижче наведена інформація для входу.';

$txt['in_maintain_mode'] = 'Форум перебуває на Технічному Обслуговуванні.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Будь ласка, прочитайте угоду перш, ніж Ви зареєструєтеся.';
$txt['register_passwords_differ_js'] = 'Паролі не збігаються!';

$txt['approval_after_registration'] = 'Дякуємо за реєстрацію. Адміністратор повинен підтвердити Вашу реєстрацію, перш ніж Ви зможете використати Ваш обліковий запис. Після підтвердження Ви отримаєте листа від Адміністратора.';

$txt['admin_settings_desc'] = 'Тут Ви можете змінити настроювання, пов\'язані з реєстрацією нових користувачів.';

$txt['setting_enableOpenID'] = 'Allow users to register using OpenID';

$txt['setting_registration_method'] = 'Method of registration employed for new members';
$txt['setting_registration_disabled'] = 'Registration Disabled';
$txt['setting_registration_standard'] = 'Immediate Registration';
$txt['setting_registration_activate'] = 'Email Activation';
$txt['setting_registration_approval'] = 'Admin Approval';
$txt['setting_notify_new_registration'] = 'Notify administrators when a new member joins';
$txt['setting_send_welcomeEmail'] = 'Send welcome email to new members';

$txt['setting_coppaAge'] = 'Age below which to apply registration restrictions';
$txt['setting_coppaAge_desc'] = '(Set to 0 to disable)';
$txt['setting_coppaType'] = 'Action to take when a user below minimum age registers';
$txt['setting_coppaType_reject'] = 'Reject their registration';
$txt['setting_coppaType_approval'] = 'Require parent/guardian approval';
$txt['setting_coppaPost'] = 'Postal address to which approval forms should be sent';
$txt['setting_coppaPost_desc'] = 'Only applies if age restriction is in place';
$txt['setting_coppaFax'] = 'Fax number to which approval forms should be faxed';
$txt['setting_coppaPhone'] = 'Contact number for parents to contact with age restriction queries';

$txt['admin_register'] = 'Реєстрація нового користувача';
$txt['admin_register_desc'] = 'Тут Ви можете зареєструвати нових користувачів. Рекомендується відправити деталі користувачів на їх email.';
$txt['admin_register_username'] = 'Ім\'я користувача';
$txt['admin_register_email'] = 'email адреса';
$txt['admin_register_password'] = 'Пароль';
$txt['admin_register_username_desc'] = 'Ім\'я нового користувача';
$txt['admin_register_email_desc'] = 'Email адреса користувача';
$txt['admin_register_password_desc'] = 'Пароль нового користувача';
$txt['admin_register_email_detail'] = 'Відправити новий пароль користувачеві';
$txt['admin_register_email_detail_desc'] = 'Потрібна вірна email адреса';
$txt['admin_register_email_activate'] = 'Вимагати активації облікового запису';
$txt['admin_register_group'] = 'Основна група користувача';
$txt['admin_register_group_desc'] = 'Основна група, до якої буде належати новий користувач';
$txt['admin_register_group_none'] = '(немає основної групи)';
$txt['admin_register_done'] = 'Користувач %s вдало зареєстрований!';

$txt['coppa_title'] = 'Форум з обмеженням за віком';
$txt['coppa_after_registration'] = 'Дякуємо за реєстрацію на форумі ' . $context['forum_name'] . '.<br /><br />Оскільки Ви молодше  {MINIMUM_AGE} років, ми повинні одержати від Ваших батьків або опікуна дозвіл, перш ніж Ви зможете використати Ваш обліковий запис. Щоб активувати обліковий запис, будь ласка, роздрукуйте цю форму:';
$txt['coppa_form_link_popup'] = 'Відкрити форму в новому вікні';
$txt['coppa_form_link_download'] = 'Завантажити форму як текстовий файл';
$txt['coppa_send_to_one_option'] = 'Попросіть батьків/опікунів заповнити форму:';
$txt['coppa_send_to_two_options'] = 'Попросіть батьків/опікунів відправити заповнену форму на email або факс, зазначені нижче:';
$txt['coppa_send_by_post'] = 'Відправити на наступну адресу:';
$txt['coppa_send_by_fax'] = 'Відправити факс на наступний номер:';
$txt['coppa_send_by_phone'] = 'Альтернатива, нехай батьки подзвонять Адміністраторові форуму за телефоном {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Форма схвалення для реєстрації на ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Адреса';
$txt['coppa_form_date'] = 'Дата';
$txt['coppa_form_body'] = 'Я {PARENT_NAME},<br /><br /> дозволяю  {CHILD_NAME} (ім\'я дитини) зареєструватися на форумі: ' . $context['forum_name'] . ', з ім\'ям користувача: {USER_NAME}.<br /><br />Я розумію, що введена особиста інформація {USER_NAME}, може бути показана іншим користувачам форуму<br /><br />Підпис:<br />{PARENT_NAME} (Батько/Опікун).';

$txt['visual_verification_sound_again'] = 'Програти знову';
$txt['visual_verification_sound_close'] = 'Закрити вікно';
$txt['visual_verification_sound_direct'] = 'Проблеми із прослуховуванням? Спробуйте пряме посилання для прослуховування';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Username is available';
$txt['registration_username_unavailable'] = 'Username is not available';
$txt['registration_username_check'] = 'Check if username is available';
$txt['registration_password_short'] = 'Password is too short';
$txt['registration_password_reserved'] = 'Password contains your username/email';
$txt['registration_password_numbercase'] = 'Password must contain both upper and lower case, and numbers';
$txt['registration_password_no_match'] = 'Passwords do not match';
$txt['registration_password_valid'] = 'Password is valid';

$txt['registration_errors_occurred'] = 'The following errors were detected in your registration. Please correct them to continue:';

$txt['authenticate_label'] = 'Authenticate using';
$txt['authenticate_password'] = 'Password';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'OpenID Authentication URL';

?>
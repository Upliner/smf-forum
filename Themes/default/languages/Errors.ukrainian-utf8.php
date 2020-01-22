<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Ви не можете зайти в цей розділ';
$txt['wireless_error_notyet'] = 'Sorry, this section isn\'t available for wireless users at this time.';

$txt['mods_only'] = 'Тільки Модератори можуть використати пряму функцію видалення, будь ласка, видаліть це повідомлення через команду Змінити.';
$txt['no_name'] = 'Поле Ім\'я обов\'язкове для заповнення.';
$txt['no_email'] = 'Поле Email обов\'язкове для заповнення.';
$txt['topic_locked'] = 'Ця тема заблокована, Ви не можете відсилати або змінювати повідомлення...';
$txt['no_password'] = 'Введіть пароль';
$txt['already_a_user'] = 'Ім\'я користувача, яке Ви намагаєтеся зареєструвати, вже використається на форумі.';
$txt['cant_move'] = 'Ви не можете переміщати теми...';
$txt['login_to_post'] = 'Для відправлення повідомлень Ви повинні зайти як користувач. Якщо Ви не зареєстровані, Ви можете зробити це <a href="' . $scripturl . '?action=register">прямо зараз </a>.';
$txt['passwords_dont_match'] = 'Паролі не збігаються.';
$txt['register_to_use'] = 'Вибачте, перед тим, як використати ці настроювання Ви повинні зареєструватися.';
$txt['password_invalid_character'] = 'Використаний неприпустимий символ у Паролі.';
$txt['name_invalid_character'] = 'Використаний неприпустимий символ в Імені.';
$txt['email_invalid_character'] = 'Використаний неприпустимий символ в Email.';
$txt['username_reserved'] = 'Ім\'я користувача, яке Ви намагаєтеся зареєструвати - зарезервовано \'%s\'. Будь ласка, виберіть інше ім\'я.';
$txt['numbers_one_to_nine'] = 'У цьому полі можна вказувати тільки числа від 0 до 9';
$txt['not_a_user'] = 'The user whose profile you are trying to view does not exist.';
$txt['not_a_topic'] = 'Такої теми не існує.';
$txt['not_approved_topic'] = 'This topic has not been approved yet.';
$txt['email_in_use'] = 'That email address (%1$s) is being used by a registered member already. If you feel this is a mistake, go to the login page and use the password reminder with that address.';

$txt['didnt_select_vote'] = 'Ви не вибрали пункт голосування.';
$txt['poll_error'] = 'Голосування не існує або закрито, або можливо Ви намагаєтеся проголосувати двічі.';
$txt['members_only'] = 'Цей сервіс доступний тільки для користувачів форуму...';
$txt['locked_by_admin'] = 'Було закрито Адміністратором. Не вдається відкрити.';
$txt['not_enough_posts_karma'] = 'Sorry, you don\'t have enough posts to modify karma - you need at least %1$d.';
$txt['cant_change_own_karma'] = 'Вибачте, Ви не можете змінювати власну карму.';
$txt['karma_wait_time'] = 'Sorry, you can\'t repeat a karma action without waiting %1$s %2$s.';
$txt['feature_disabled'] = 'Вибачте, ця опція відключена.';
$txt['cant_access_upload_path'] = 'Немає доступу до папки для завантаження вкладень!';
$txt['file_too_big'] = 'Ваш файл занадто великий. Максимальний розмір вкладення повинен бути не більше %d KB.';
$txt['attach_timeout'] = 'Ваше вкладення не може бути збережено. Можливо файл більший, ніж дозволяє сервер.<br /><br />Будь ласка, проконсультуйтеся з Адміністратором для одержання більш докладної інформації.';
$txt['filename_exists'] = 'Sorry! There is already an attachment with the same filename as the one you tried to upload. Please rename the file and try again.';
$txt['bad_attachment'] = 'Your attachment has failed security checks and cannot be uploaded. Please consult the forum administrator.';
$txt['ran_out_of_space'] = 'Папка upload заповнена. Спробуйте файл меншого розміру або зв\'яжіться з Адміністратором.';
$txt['couldnt_connect'] = 'Не вийшло з\'єднатися із сервером або файл не знайдений';
$txt['no_board'] = 'Зазначений вами розділ не існує';
$txt['cant_split'] = 'Ви не можете розділяти теми';
$txt['cant_merge'] = 'Ви не можете з\'єднувати теми';
$txt['no_topic_id'] = 'Ви вказали неправильний ID теми.';
$txt['split_first_post'] = 'Ви не можете розділяти тему з першого повідомлення.';
$txt['topic_one_post'] = 'Ця тема містить тільки одне повідомлення і не може бути розділена.';
$txt['no_posts_selected'] = 'не обрані повідомлення';
$txt['selected_all_posts'] = 'Unable to split. You have selected every message.';
$txt['cant_find_messages'] = 'Неможливо знайти повідомлення';
$txt['cant_find_user_email'] = 'Unable to find user\'s email address.';
$txt['cant_insert_topic'] = 'Неможливо вставити тему';
$txt['already_a_mod'] = 'Ви вибрали ім\'я користувача існуючого Модератора. Будь ласка, виберіть інше ім\'я.';
$txt['session_timeout'] = 'Ваша сесія закінчилася поки Ви писали повідомлення. Будь ласка, поверніться назад і спробуйте знову.';
$txt['session_verify_fail'] = 'Session verification failed.  Please try logging out and back in again, and then try again.';
$txt['verify_url_fail'] = 'Неможливо перевірити місце розташування відсилаємого файлу. Будь ласка, поверніться назад і спробуйте знову.';
$txt['guest_vote_disabled'] = 'Guests cannot vote in this poll.';

$txt['cannot_access_mod_center'] = 'You do not have permission to access the moderation center.';
$txt['cannot_admin_forum'] = 'Ви не можете адмініструвати цей Форум.';
$txt['cannot_announce_topic'] = 'Ви не можете сповіщати про теми в цьому розділі.';
$txt['cannot_approve_posts'] = 'You do not have permission to approve items.';
$txt['cannot_post_unapproved_attachments'] = 'You do not have permission to post unapproved attachments.';
$txt['cannot_post_unapproved_topics'] = 'You do not have permission to post unapproved topics.';
$txt['cannot_post_unapproved_replies_own'] = 'You do not have permission to post unapproved replies to your topics.';
$txt['cannot_post_unapproved_replies_any'] = 'You do not have permission to post unapproved replies to other users\' topics.';
$txt['cannot_calendar_edit_any'] = 'Ви не можете редагувати календарні події.';
$txt['cannot_calendar_edit_own'] = 'У Вас немає необхідних привілеїв, щоб редагувати Ваші події.';
$txt['cannot_calendar_post'] = 'Розміщення подій заборонене, Вибачте.';
$txt['cannot_calendar_view'] = 'Вибачте, Ви не можете переглядати календар.';
$txt['cannot_remove_any'] = 'Видалення будь-яких повідомлень у цьому форумі заборонено.';
$txt['cannot_remove_own'] = 'Ви не можете видаляти свої повідомлення.';
$txt['cannot_edit_news'] = 'Ви не можете редагувати новини на цьому форумі.';
$txt['cannot_pm_read'] = 'Вибачте, Ви не можете читати особисті повідомлення.';
$txt['cannot_pm_send'] = 'Вибачте, Ви не можете відправляти особисті повідомлення.';
$txt['cannot_karma_edit'] = 'Ви не можете змінювати карму інших користувачів.';
$txt['cannot_lock_any'] = 'Ви не можете закривати теми.';
$txt['cannot_lock_own'] = 'Вибачте, Ви не можете закривати власні теми.';
$txt['cannot_make_sticky'] = 'Ви не можете прикріпити цю тему.';
$txt['cannot_manage_attachments'] = 'Вам не дозволяється управляти вкладеннями або аватарами.';
$txt['cannot_manage_bans'] = 'Ви не можете змінювати список забанених користувачів.';
$txt['cannot_manage_boards'] = 'Вам не дозволено управляти розділами і категоріями.';
$txt['cannot_manage_membergroups'] = 'Не вистачає прав для зміни або додавання груп користувачів.';
$txt['cannot_manage_permissions'] = 'Не вистачає прав для керування правами користувачів.';
$txt['cannot_manage_smileys'] = 'Ви не можете керувати смайлами.';
$txt['cannot_mark_any_notify'] = 'У Вас немає необхідного дозволу одержувати повідомлення із цієї теми.';
$txt['cannot_mark_notify'] = 'Вибачте, Ви не можете одержувати повідомлення із цього розділу.';
$txt['cannot_merge_any'] = 'Ви не можете з\'єднувати теми в цьому розділі.';
$txt['cannot_moderate_forum'] = 'Ви не можете модерувати цей форум.';
$txt['cannot_moderate_board'] = 'You are not allowed to moderate this board.';
$txt['cannot_modify_any'] = 'Ви не можете змінювати будь-які повідомлення.';
$txt['cannot_modify_own'] = 'Вибачте, Ви не можете редагувати власні повідомлення.';
$txt['cannot_modify_replies'] = 'Ви не можете редагувати повідомлення користувачів, навіть якщо Ви є автором.';
$txt['cannot_move_own'] = 'Ви не можете переміщати власні теми.';
$txt['cannot_move_any'] = 'Ви не можете переміщати теми в цьому розділі.';
$txt['cannot_poll_add_own'] = 'Вибачте, Ви не можете додавати голосування у власну тему.';
$txt['cannot_poll_add_any'] = 'Вибачте, Ви не можете додавати голосування в теми.';
$txt['cannot_poll_edit_own'] = 'Ви не можете редагувати голосування, навіть якщо Ви є автором.';
$txt['cannot_poll_edit_any'] = 'Ви не можете редагувати голосування.';
$txt['cannot_poll_lock_own'] = 'Ви не можете закривати свої голосування.';
$txt['cannot_poll_lock_any'] = 'Вибачте, Ви не можете закривати голосування.';
$txt['cannot_poll_post'] = 'Ви не можете створювати голосування в цьому розділі.';
$txt['cannot_poll_remove_own'] = 'Ви не можете видалити голосування із власної теми.';
$txt['cannot_poll_remove_any'] = 'Ви не можете видаляти голосування.';
$txt['cannot_poll_view'] = 'Ви не можете переглядати голосування в цьому розділі.';
$txt['cannot_poll_vote'] = 'Вибачте, але Ви не можете голосувати в цьому розділі.';
$txt['cannot_post_attachment'] = 'Ви не можете вставляти тут вкладення.';
$txt['cannot_post_new'] = 'Вибачте, Ви не можете створювати нові теми в цьому розділі.';
$txt['cannot_post_reply_any'] = 'Ви не можете відповідати в цьому розділі.';
$txt['cannot_post_reply_own'] = 'Ви не можете відповідати в цьому розділі, навіть якщо Ви є автором теми.';
$txt['cannot_profile_remove_own'] = 'Вибачте, Ви не можете видалити свій обліковий запис.';
$txt['cannot_profile_remove_any'] = 'Ви не можете видаляти облікові записи користувачів!';
$txt['cannot_profile_extra_any'] = 'Ви не можете змінювати настроювання профілю.';
$txt['cannot_profile_identity_any'] = 'Ви не можете редагувати настроювання облікового запису.';
$txt['cannot_profile_title_any'] = 'Ви не можете редагувати підпис над аватарою користувачів.';
$txt['cannot_profile_extra_own'] = 'Вибачте, Ви не можете редагувати Ваші дані в профілі.';
$txt['cannot_profile_identity_own'] = 'Вибачте, Ви не можете змінити Вашу інформацію в даний момент.';
$txt['cannot_profile_title_own'] = 'Ви не можете змінити підпис над аватарою у Вашому профілі.';
$txt['cannot_profile_server_avatar'] = 'Ви не можете використати аватари, розташовані на сервері.';
$txt['cannot_profile_upload_avatar'] = 'Ви не можете завантажувати аватари.';
$txt['cannot_profile_remote_avatar'] = 'Ви не можете використати аватари з віддаленого сервера.';
$txt['cannot_profile_view_own'] = 'Ви не можете переглядати свій профіль.';
$txt['cannot_profile_view_any'] = 'Ви не можете переглядати профілі користувачів.';
$txt['cannot_delete_own'] = 'Ви не можете видаляти власні теми в цьому розділі.';
$txt['cannot_delete_replies'] = 'Вибачте, Ви не можете видаляти повідомлення, навіть незважаючи на те, що вони перебувають у Вашій власній темі.';
$txt['cannot_delete_any'] = 'Вибачте, Ви не можете видаляти теми.';
$txt['cannot_report_any'] = 'Ви не можете сповіщати про повідомлення в цьому розділі.';
$txt['cannot_search_posts'] = 'Ви не можете шукати повідомлення на цьому форумі.';
$txt['cannot_send_mail'] = 'У Вас не вистачає прав на відправлення email користувачам форуму.';
$txt['cannot_issue_warning'] = 'Sorry, you do not have permission to issue warnings to members.';
$txt['cannot_send_topic'] = 'Вибачте, але Адміністратор відключив створення тем у цьому розділі.';
$txt['cannot_split_any'] = 'Поділ будь-яких тем у цьому розділі заборонено.';
$txt['cannot_view_attachments'] = 'Очевидно, Вам не дозволено зкачувати або переглядати вкладення в цьому розділі.';
$txt['cannot_view_mlist'] = 'Ви не можете переглядати список користувачів.';
$txt['cannot_view_stats'] = 'Ви не можете переглядати статистику форуму.';
$txt['cannot_who_view'] = 'Ви не можете переглядати, хто Online.';

$txt['no_theme'] = 'Такі теми не існують.';
$txt['theme_dir_wrong'] = 'Директорія теми зазначена невірно, будь ласка, виправте її натиснувши на цей текст.';
$txt['registration_disabled'] = 'Вибачте, реєстрація в даний момент недоступна.';
$txt['registration_no_secret_question'] = 'Вибачте, для даного користувача не обране секретне питання.';
$txt['poll_range_error'] = 'Вибачте, опитування повинно тривати мінімум 1 день.';
$txt['delFirstPost'] = 'Ви не можете видалити перше повідомлення в темі.<p>Якщо Ви хочете видалити цю тему, натисніть на ВИДАЛИТИ ТЕМУ або попросите Адміністратора/Модератора зробити це за Вас</p>';
$txt['parent_error'] = 'Не вдалося створити розділ!';
$txt['login_cookie_error'] = 'Не вдалося увійти на форум. Будь ласка, перевірте настроювання cookie.';
$txt['incorrect_answer'] = 'Вибачте, Ви неправильно відповістили на секретне запитання. Натисніть Назад і спробуйте знову, або натисніть Назад двічі, щоб використати звичайний метод одержання пароля.';
$txt['no_mods'] = 'Модератори відсутні!';
$txt['parent_not_found'] = 'Структура розділу зіпсована: не вийшло знайти батьківський розділ';
$txt['modify_post_time_passed'] = 'Ви не можете відредагувати це повідомлення, час відведений на редагування минув.';

$txt['calendar_off'] = 'Календар у цей момент відключений.';
$txt['invalid_month'] = 'Неправильне значення місяця.';
$txt['invalid_year'] = 'Неправильне значення року.';
$txt['invalid_day'] = 'Invalid day value.';
$txt['event_month_missing'] = 'Пропущений місяць події.';
$txt['event_year_missing'] = 'Пропущений рік події.';
$txt['event_day_missing'] = 'Пропущений день події.';
$txt['event_title_missing'] = 'Пропущений заголовок події.';
$txt['invalid_date'] = 'Неправильна дата.';
$txt['no_event_title'] = 'Не введений заголовок події.';
$txt['missing_event_id'] = 'Не зазначений ID події.';
$txt['cant_edit_event'] = 'Не вистачає прав на редагування цієї події.';
$txt['missing_board_id'] = 'Не зазначений ID розділу.';
$txt['missing_topic_id'] = 'Не зазначений ID теми.';
$txt['topic_doesnt_exist'] = 'Такої теми не існує.';
$txt['not_your_topic'] = 'Ви не є власником цієї теми.';
$txt['board_doesnt_exist'] = 'Такого розділу не існує.';
$txt['no_span'] = 'Можливість часового діапазону відключена.';
$txt['invalid_days_numb'] = 'Невірна кількість днів часового діапазону.';

$txt['moveto_noboards'] = 'Відсутній розділ для переміщення туди теми!';

$txt['already_activated'] = 'Ваш обліковий запис вже активований.';
$txt['still_awaiting_approval'] = 'Ваш обліковий запис очікує схвалення Адміністратора.';

$txt['invalid_email'] = 'Неправильний email адреса або діапазон адрес.<br />Приклад правильної email адреси:   evil.user@badsite.com.<br />Приклад правильного діапазону адрес: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'Недоступна дата закінчення';
$txt['invalid_hostname'] = 'Неправильне ім\'я хоста або  діапазону імен.<br />Приклад правильного імені хоста: proxy4.badhost.com.<br />Приклад правильного діапазону імен: *.badhost.com';
$txt['invalid_ip'] = 'Неправильний IP або діапазон IP.<br />Приклад правильного IP адреси: 127.0.0.1<br />Приклад правильного діапазону IP адрес: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Invalid IP / IP range.<br />Example of a valid IP address: 127.0.0.1<br />Example of a valid IP range: 127.0.0.*';
$txt['invalid_username'] = 'Ім\'я користувача не знайдене';
$txt['no_ban_admin'] = 'Ви не можете забанити адміністратора форуму. Для початку необхідно зняти статус адміністратора!';
$txt['no_bantype_selected'] = 'Не обраний тип бана';
$txt['ban_not_found'] = 'Бан не знайдений';
$txt['ban_unknown_restriction_type'] = 'Тип заборони не відомий';
$txt['ban_name_empty'] = 'The name of the ban was left empty';
$txt['ban_name_exists'] = 'The name of this ban (%1$s) already exists. Please choose a different name.';
$txt['ban_trigger_already_exists'] = 'This ban trigger (%1$s) already exists in %2$s.';

$txt['recycle_no_valid_board'] = 'Не обраний діючий розділ для видалення теми';

$txt['login_threshold_fail'] = 'Вибачте, Ви не можете увійти на форум. Будь ласка, спробуйте пізніше.';
$txt['login_threshold_brute_fail'] = 'Sorry, but you\'ve reached your login attempts threshold.  Please wait 30 seconds and try again later.';

$txt['who_off'] = 'Ви не можете одержати доступ до перегляду Хто Online. Дана функція відключена.';

$txt['merge_create_topic_failed'] = 'Помилка при створенні нової теми.';
$txt['merge_need_more_topics'] = 'Для з\'єднання потрібно як мінімум дві теми.';

$txt['postWaitTime_broken'] = 'The last posting from your IP was less than %1$d seconds ago. Please try again later.';
$txt['registerWaitTime_broken'] = 'Ви вже зареєструвалися %d секунд назад!';
$txt['loginWaitTime_broken'] = 'Вам доведеться почекати біля %d секунд, щоб повторити спробу входу, вибачте.';
$txt['pmWaitTime_broken'] = 'The last personal message from your IP was less than %1$d seconds ago. Please try again later.';
$txt['reporttmWaitTime_broken'] = 'The last topic report from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendtopcWaitTime_broken'] = 'The last topic sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendmailWaitTime_broken'] = 'The last email sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['searchWaitTime_broken'] = 'You last search was less than %d seconds ago. Please try again later.';

$txt['email_missing_data'] = 'You must enter something in both the subject and message boxes.';

$txt['topic_gone'] = 'Тема або розділ, який Ви шукайте, відсутній або недоступна для входу.';
$txt['theme_edit_missing'] = 'Файл, який Ви намагаєтеся редагувати, не знайдений!';

$txt['attachments_no_write'] = 'Папка для вкладень перебуває в режимі ТІЛЬКИ ДЛЯ ЧИТАННЯ. Ваше вкладення або аватар не може бути збережений.';
$txt['attachments_limit_per_post'] = 'Ви не можете завантажувати більше %d вкладень в одному повідомленні';

$txt['no_dump_database'] = 'Тільки Адміністратор може робити бекап Бази Даних!';
$txt['pm_not_yours'] = 'Особисте повідомлення, яке Ви намагаєтеся процитувати не Ваше або його не існує, будь ласка, поверніться назад і спробуйте знову.';
$txt['mangled_post'] = 'Проблеми з датою, будь ласка, поверніться і спробуйте знову.';
$txt['quoted_post_deleted'] = 'Повідомлення, яке Ви намагаєтесь процитувати було вилучено або більше недоступне для Вас.';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %1$d personal messages per hour.';
$txt['labels_too_many'] = 'Sorry, %1$s messages already had the maximum amount of labels allowed!';

$txt['register_only_once'] = 'Вибачте, але Ви не можете реєструвати відразу трохи користувачів за один раз.';
$txt['admin_setting_coppa_require_contact'] = 'You must enter either a postal or fax contact if parent/guardian approval is required.';

$txt['error_long_name'] = 'Ім\'я, яке Ви намагаєтеся використати занадто довге.';
$txt['error_no_name'] = 'Відсутнє ім\'я.';
$txt['error_bad_name'] = 'Дане ім\'я не може бути використано. Воно зарезервоване на форумі.';
$txt['error_no_email'] = 'Відсутня Email адреса.';
$txt['error_bad_email'] = 'Неправильна Email адреса.';
$txt['error_no_event'] = 'Відсутня назва події.';
$txt['error_no_subject'] = 'Відсутня тема повідомлення.';
$txt['error_no_question'] = 'Відсутнє питання.';
$txt['error_no_message'] = 'Повідомлення було залишено порожнім.';
$txt['error_long_message'] = 'Повідомлення перевищує максимально припустиму довжину (%s знаків).';
$txt['error_no_comment'] = 'The comment field was left empty.';
$txt['error_session_timeout'] = 'Ваша сесія закінчилося під час написання повідомлення. Будь ласка, спробуйте зново.';
$txt['error_no_to'] = 'Відсутні одержувачі.';
$txt['error_bad_to'] = 'Одержувачі не знайдені.';
$txt['error_bad_bcc'] = 'Одержувачі не знайдені.';
$txt['error_form_already_submitted'] = 'Ви вже відправили це повідомлення! Можливо, Ви випадково натиснули двічі або намагалися оновити сторінку.';
$txt['error_poll_few'] = 'Повинне бути як мінімум два пункти голосування!';
$txt['error_need_qr_verification'] = 'Please complete the verification section below to complete your post.';
$txt['error_wrong_verification_code'] = 'The letters you typed don\'t match the letters that were shown in the picture.';
$txt['error_wrong_verification_answer'] = 'You did not answer the verification questions correctly.';
$txt['error_need_verification_code'] = 'Please enter the verification code below to continue to the results.';
$txt['error_bad_file'] = 'Sorry but the file specified could not be opened: %1$s';
$txt['error_bad_line'] = 'The line you specified is invalid.';

$txt['smiley_not_found'] = 'Смайл не знайдений.';
$txt['smiley_has_no_code'] = 'Цьому смайлу не був привласнений код.';
$txt['smiley_has_no_filename'] = 'Не був названий файл цього смайла.';
$txt['smiley_not_unique'] = 'Смайл із таким кодом вже існує.';
$txt['smiley_set_already_exists'] = 'Набір смайлів з такою адресою (URL) вже існує';
$txt['smiley_set_not_found'] = 'Набір смайлів не знайдений';
$txt['smiley_set_path_already_used'] = 'Адреса (URL) набору смайлів вже використовувалася іншим набором смайлів.';
$txt['smiley_set_unable_to_import'] = 'Неможливо імпортувати набір смайлів. Невірно зазначена директорія, або до неї немає доступу.';

$txt['smileys_upload_error'] = 'Не вдалося завантажити файли.';
$txt['smileys_upload_error_blank'] = 'Всі набори смайлів повинні мати зображення!';
$txt['smileys_upload_error_name'] = 'Всі смайли повинні мати свої власні імена!';
$txt['smileys_upload_error_illegal'] = 'Невірний Тип.';

$txt['search_invalid_weights'] = 'Параметри пошуку сконфигуровані невірно. Як мінімум один фактор повинен відрізнятися від нуля. Будь ласка, повідомите про цю помилку Адміністраторові..';
$txt['unable_to_create_temporary'] = 'Пошук не зміг створити тимчасову таблицю. Будь ласка, повідомите про цю помилку Адміністраторові.';

$txt['package_no_file'] = 'Не знайдений файл пакета модифікацій!';
$txt['packageget_unable'] = 'Не вдалося з\'єднатися із сервером. Будь ласка, спробуйте використати <a href="%s" target="_new">цю Адресу (URL)</a>.';
$txt['not_on_simplemachines'] = 'Вибачте, пакети модифікацій можуть бути завантажені тільки із сервера simplemachines.org.';
$txt['package_cant_uninstall'] = 'Цей пакет модифікацій не встановлений, або вже вилучений - Ви не можете видалити його.';
$txt['package_cant_download'] = 'Ви не можете завантажити або встановити новий пакет модифікацій, тому що директорія Пакетів Модифікацій захищена від запису (CHMOD)!';
$txt['package_upload_error_nofile'] = 'You did not select a package to upload.';
$txt['package_upload_error_failed'] = 'Could not upload package, please check directory permissions!';
$txt['package_upload_error_exists'] = 'Файл, який Ви завантажуєте, вже існує на сервері. Будь ласка, видалите його і спробуйте знову.';
$txt['package_upload_error_supports'] = 'The package manager currently allows only these file types: %1$s.';
$txt['package_upload_error_broken'] = 'Package upload failed due to the following error:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'The package you are trying to install cannot be located. You may want to manually upload the package to your Packages directory.';
$txt['package_get_error_missing_xml'] = 'The package you are attempting to install is missing the package-info.xml that must be in the root package directory.';
$txt['package_get_error_is_zero'] = 'Although the package was downloaded to the server it appears to be empty. Please check the Packages directory, and the &quot;temp&quot; sub-directory are both writable. If you continue to experience this problem you should try extracting the package on your PC and uploading the extracted files into a subdirectory in your Packages directory and try again. For example, if the package was called shout.tar.gz you should:<br />1) Download the package to your local PC and extract it into files.<br />2) Using an FTP client create a new directory in your &quot;Packages&quot; folder, in this example you may call it "shout".<br />3) Upload all the files from the extracted package to this directory.<br />4) Go back to the package manager browse page and the package will be automatically found by SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF was unable to find any valid information within the package-info.xml file included within the Package. There may be an error with the modification, or the package may be corrupt.';

$txt['no_membergroup_selected'] = 'Не обрана група користувачів';
$txt['membergroup_does_not_exist'] = 'Такої групи користувачів не існує.';

$txt['at_least_one_admin'] = 'На форумі повинен бути як мінімум один Адміністратор!';

$txt['error_functionality_not_windows'] = 'Sorry, this functionality is currently not available for servers running Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Вкладення не знайдено';

$txt['error_no_boards_selected'] = 'Розділ не обраний!';
$txt['error_invalid_search_string'] = 'Ви не вказали рядок пошуку';
$txt['error_invalid_search_string_blacklist'] = 'Your search query contained too trivial words. Please try again with a different query.';
$txt['error_search_string_small_words'] = 'Each word must be at least two characters long.';
$txt['error_query_not_specific_enough'] = 'Ваш запит не занадто інформативний. Спробуйте використати більш довгі слова або цілі фрази.';
$txt['error_no_messages_in_time_frame'] = 'У даному часовому проміжку повідомлень не знайдено.';
$txt['error_no_labels_selected'] = 'Жоден параметр не обраний!';
$txt['error_no_search_daemon'] = 'Unable to access the search daemon';

$txt['profile_errors_occurred'] = 'Наступна помилка виникла при спробі зберегти Ваш профіль';
$txt['profile_error_bad_offset'] = 'Невірно зазначена різниця в часі';
$txt['profile_error_no_name'] = 'Ви не вказали ім\'я користувача';
$txt['profile_error_name_taken'] = 'Обране ім\'я вже встановлене';
$txt['profile_error_name_too_long'] = 'The selected name is too long. It should be no greater than 60 characters long';
$txt['profile_error_no_email'] = 'Ви не вказали Email адресу';
$txt['profile_error_bad_email'] = 'Ви ввели невірну Email адресу';
$txt['profile_error_email_taken'] = 'Існує користувач, який вказав дану email адресу';
$txt['profile_error_no_password'] = 'Ви не ввели пароль';
$txt['profile_error_bad_new_password'] = 'Новий пароль не підходить';
$txt['profile_error_bad_password'] = 'Не вірно зазначений пароль';
$txt['profile_error_bad_avatar'] = 'Ваш аватар занадто великий, або не є графічним файлом';
$txt['profile_error_password_short'] = 'Ваш пароль повинен містити як мінімум ' . (empty($modSettings['password_strength']) ? 4:8) . ' символів.';
$txt['profile_error_password_restricted_words'] = 'Ваш пароль не повинен містити Ваше ім\'я, email адресу, або іншу, доступну у Вашому профілі інформацію.';
$txt['profile_error_password_chars'] = 'Ваш пароль повинен містити символи верхнього і нижнього регістрів, а так само цифри.';
$txt['profile_error_already_requested_group'] = 'You already have an outstanding request for this group!';
$txt['profile_error_openid_in_use'] = 'Another user is already using that OpenID authentication URL';

$txt['mysql_error_space'] = ' - перевірте чи існує База Даних або зверніться до Вашому хостера.';

$txt['icon_not_found'] = 'Іконка не знайдена у використовуваній темі оформлення, будь ласка, упевніться в тому, що Ви завантажили іконку на сервер і спробуйте знову.';
$txt['icon_after_itself'] = 'Іконка не може йти сама після себе!';
$txt['icon_name_too_long'] = 'Ім\'я іконки не може містити більше 16 символів';

$txt['name_censored'] = 'Вибачте, ім\'я, яке Ви намагаєтеся використати, %s, містить слово, яке підлягає цензурі. Будь ласка, спробуйте інше ім\'я.';

$txt['poll_already_exists'] = 'У темі може бути тільки одне голосування!';
$txt['poll_not_found'] = 'Немає голосування, яке стосується цієї теми!';

$txt['error_while_adding_poll'] = 'Наступні помилки виникли при додаванні голосування';
$txt['error_while_editing_poll'] = 'Наступні помилки виникли при редагуванні голосування';

$txt['loadavg_search_disabled'] = 'Через велике завантаження сервера, функція пошуку тимчасово відключена. Будь ласка, спробуйте скористатися пошуком трохи пізніше.';
$txt['loadavg_generic_disabled'] = 'Вибачте, через велике завантаження сервера ця функція тимчасово відключена.';
$txt['loadavg_allunread_disabled'] = 'Неможливо знайти всі непрочитані теми через високе завантаження сервера.';
$txt['loadavg_unreadreplies_disabled'] = 'Сервер перевантажений. Будь ласка, спробуйте ще раз.';
$txt['loadavg_show_posts_disabled'] = 'Будь ласка, спробуйте трохи пізніше. Повідомлення цього користувача недоступне через високе завантаження сервера.';
$txt['loadavg_unread_disabled'] = 'The server\'s resources are temporarily under too high a demand to list out the topics you have not read.';

$txt['cannot_edit_permissions_inherited'] = 'You can not edit inherited permissions directly, you must either edit the parent group or edit the membergroup inheritance.';

$txt['mc_no_modreport_specified'] = 'You need to specify which report you wish to view.';
$txt['mc_no_modreport_found'] = 'The specified report either doesn\'t exist or is off limits to you';

$txt['st_cannot_retrieve_file'] = 'Could not retrieve the file %1$s.';
$txt['admin_file_not_found'] = 'Could not load the requested file: %1$s.';

$txt['themes_none_selectable'] = 'At least one theme must be selectable.';
$txt['themes_default_selectable'] = 'The overall forum default theme must be a selectable theme.';
$txt['ignoreboards_disallowed'] = 'The option to ignore boards has not been enabled.';

$txt['mboards_delete_error'] = 'No category selected!';
$txt['mboards_delete_board_error'] = 'No board selected!';

$txt['mboards_parent_own_child_error'] = 'Unable to make a parent its own child!';
$txt['mboards_board_own_child_error'] = 'Unable to make a board its own child!';

$txt['smileys_upload_error_notwritable'] = 'The following smiley directories are not writable: %1$s';
$txt['smileys_upload_error_types'] = 'Image can only have the following extensions: %1$s.';

$txt['change_email_success'] = 'Your email address has been changed, and a new activation email has been sent to it.';
$txt['resend_email_success'] = 'A new activation email has successfully been sent.';

$txt['custom_option_need_name'] = 'The profile option must have a name!';
$txt['custom_option_not_unique'] = 'Field name is not unique!';

$txt['warning_no_reason'] = 'You must enter a reason for altering the warning state of a member.';
$txt['warning_notify_blank'] = 'You selected to notify the user but did not fill in the subject/message fields.';

$txt['cannot_connect_doc_site'] = 'Could not connect to the Simple Machines Online Manual. Please check your server configuration allows external internet connections and try again later.';

$txt['movetopic_no_reason'] = 'You must enter a reason for moving the topic, or uncheck the option to \'post a redirection topic\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'The requested identifier did not return the proper information.';
$txt['openid_return_no_mode'] = 'The identity provider did not respond with the Open ID mode.';
$txt['openid_not_resolved'] = 'The identity provider did not approve your request.';
$txt['openid_no_assoc'] = 'Could not find the requested association with the identity provider.';
$txt['openid_sig_invalid'] = 'The signature from the identity provider is invalid.';
$txt['openid_load_data'] = 'Could not load the data from your login request.  Please try again.';
$txt['openid_not_verified'] = 'The OpenID address given has not been verified yet.  Please log in to verify.';

$txt['error_custom_field_too_long'] = 'The &quot;%1$s&quot; field cannot be greater than %2$d characters in length.';
$txt['error_custom_field_invalid_email'] = 'The &quot;%1$s&quot; field must be a valid email address.';
$txt['error_custom_field_not_number'] = 'The &quot;%1$s&quot; field must be numeric.';
$txt['error_custom_field_inproper_format'] = 'The &quot;%1$s&quot; field is an invalid format.';
$txt['error_custom_field_empty'] = 'The &quot;%1$s&quot; field cannot be left blank.';

$txt['email_no_template'] = 'The email template &quot;%1$s&quot; could not be found.';

$txt['search_api_missing'] = 'The search API could not be found! Please contact the admin to check they have uploaded the correct files.';
$txt['search_api_not_compatible'] = 'The selected search API the forum is using is out of date - falling back to standard search. Please check file %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'You cannot restore the first post in a topic.';
$txt['parent_topic_missing'] = 'The parent topic of the post you are trying to restore has been deleted.';
$txt['restored_disabled'] = 'The restoration of topics has been disabled.';
$txt['restore_not_found'] = 'The following messages could not be restored; the original topic may have been removed:<ul style="margin-top: 0px;">%1$s</ul>You will need to move these manually.';

$txt['error_invalid_dir'] = 'The directory you entered is invalid.';

$txt['error_sqlite_optimizing'] = 'Sqlite is optimizing the database, the forum can not be accessed until it has finished.  Please try refreshing this page momentarily.';

?>
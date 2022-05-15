<?php
// Version: 2.0.12; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'uk_UA.utf8';
$txt['lang_dictionary'] = 'uk';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Неділя', 'Понеділок', 'Вівторок', 'Середf', 'Четвер', 'П\'ятниця', 'Субота');
$txt['days_short'] = array('НД', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Січня', 'Лютого', 'Березня', 'Квітня', 'Травня', 'Червня', 'Липня', 'Серпня', 'Вересня', 'Жовтня', 'Листопада', 'Грудня');
$txt['months_titles'] = array(1 => 'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень');
$txt['months_short'] = array(1 => 'Січ.', 'Лют.', 'Бер.', 'Квт.', 'Трв.', 'Черв.', 'Лип.', 'Серп.', 'Вер.', 'Жовт.', 'Лист.', 'Груд.');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'нове';
$txt['newmessages1'] = 'нових';
$txt['newmessages3'] = 'Нових';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Адміністрування';
$txt['moderate'] = 'Moderate';

$txt['save'] = 'Зберегти';

$txt['modify'] = 'Редагувати';
$txt['forum_index'] = $context['forum_name'] . ' - Головна форума';
$txt['members'] = 'Користувачів';
$txt['board_name'] = 'Назва розділів';
$txt['posts'] = 'Повідомлень';

$txt['member_postcount'] = 'Повідомлень';
$txt['no_subject'] = '(Немає теми)';
$txt['view_profile'] = 'Перегляд профілю';
$txt['guest_title'] = 'Гість';
$txt['author'] = 'Автор';
$txt['on'] = '';
$txt['remove'] = 'Видалити';
$txt['start_new_topic'] = 'Нова тема';

$txt['login'] = 'Увійти';
// Use numeric entities in the below string.
$txt['username'] = 'Ім\'я користувача';
$txt['password'] = 'Пароль';

$txt['username_no_exist'] = 'Такого користувача не існує.';
$txt['no_user_with_email'] = 'There are no usernames associated with that email.';

$txt['board_moderator'] = 'Модератор';
$txt['remove_topic'] = 'Видалити тему';
$txt['topics'] = 'Тем';
$txt['modify_msg'] = 'Редагувати повідомлення';
$txt['name'] = 'Ім\'я';
$txt['email'] = 'Email';
$txt['subject'] = 'Тема';
$txt['message'] = 'Повідомлення';
$txt['redirects'] = 'Redirects';
$txt['quick_modify'] = 'Modify Inline';

$txt['choose_pass'] = 'Пароль';
$txt['verify_pass'] = 'Підтвердити пароль';
$txt['position'] = 'Статус';

$txt['profile_of'] = 'Перегляд профілю';
$txt['total'] = 'Всього';
$txt['posts_made'] = 'Повідомлень';
$txt['website'] = 'Сайт';
$txt['register'] = 'Реєстрація';
$txt['warning_status'] = 'Warning Status';
$txt['user_warn_watch'] = 'User is on moderator watch list';
$txt['user_warn_moderate'] = 'User posts join approval queue';
$txt['user_warn_mute'] = 'User is banned from posting';
$txt['warn_watch'] = 'Watched';
$txt['warn_moderate'] = 'Moderated';
$txt['warn_mute'] = 'Muted';

$txt['message_index'] = 'Повідомлення';
$txt['news'] = 'Новини';
$txt['home'] = 'Початок';

$txt['lock_unlock'] = 'Заблокувати/Розблокувати тему';
$txt['post'] = 'Відправити';
$txt['error_occured'] = 'Помилка!';
$txt['at'] = '';
$txt['logout'] = 'Вийти';
$txt['started_by'] = 'Автор';
$txt['replies'] = 'Відповідей';
$txt['last_post'] = 'Остання відповідь';
$txt['admin_login'] = 'Вхід для Адміністратора';
// Use numeric entities in the below string.
$txt['topic'] = 'Тема';
$txt['help'] = 'Допомога';
$txt['notify'] = 'Повідомляти';
$txt['unnotify'] = 'Unnotify';
$txt['notify_request'] = 'Ви хочете одержати повідомлення на email, коли хто-небудь відповість у цій темі?';
// Use numeric entities in the below string.
$txt['regards_team'] = "З Повагою,\nАдміністрація форуму " . $context['forum_name'] . '';
$txt['notify_replies'] = 'Повідомити про нові відповіді';
$txt['move_topic'] = 'Перемістити тему';
$txt['move_to'] = 'Перемістити в';
$txt['pages'] = 'Сторінок';
$txt['users_active'] = 'Користувачі за останні %s хвилин';
$txt['personal_messages'] = 'Особисті повідомлення';
$txt['reply_quote'] = 'Процитувати';
$txt['reply'] = 'Відповідь';
$txt['reply_noun'] = 'Reply';
$txt['approve'] = 'Approve';
$txt['approve_all'] = 'approve all';
$txt['awaiting_approval'] = 'Awaiting Approval';
$txt['attach_awaiting_approve'] = 'Attachments awaiting approval';
$txt['post_awaiting_approval'] = 'Note: This message is awaiting approval by a moderator.';
$txt['there_are_unapproved_topics'] = 'There are %1$s topics and %2$s posts awaiting approval in this board. Click <a href="%3$s">here</a> to view them all.';

$txt['msg_alert_none'] = 'Немає повідомлень...';
$txt['msg_alert_you_have'] = 'у Вас';
$txt['msg_alert_messages'] = 'повідомлень';
$txt['remove_message'] = 'Видалити повідомлення';

$txt['online_users'] = 'Користувачі Online';
$txt['personal_message'] = 'Особисте повідомлення';
$txt['jump_to'] = 'Перейти в';
$txt['go'] = 'так';
$txt['are_sure_remove_topic'] = 'Ви впевнені, що хочете видалити цю тему?';
$txt['yes'] = 'Так';
$txt['no'] = 'Ні';

$txt['search_end_results'] = 'Кінець результатів';
$txt['search_on'] = 'від';

$txt['search'] = 'Пошук';
$txt['all'] = 'Всі';

$txt['back'] = 'Назад';
$txt['password_reminder'] = 'Нагадати пароль';
$txt['topic_started'] = 'Тема розпочата';
$txt['title'] = 'Назва';
$txt['post_by'] = 'Відправлено';
$txt['memberlist_searchable'] = 'Пошук користувачів.';
$txt['welcome_member'] = 'Ласкаво Просимо';
$txt['admin_center'] = 'Центр Адміністрування';
$txt['last_edit'] = 'Останнє редагування';
$txt['notify_deactivate'] = 'Ви хочете відключити повідомлення в цій темі?';

$txt['recent_posts'] = 'Останні повідомлення';

$txt['location'] = 'Розташування';
$txt['gender'] = 'Стать';
$txt['date_registered'] = 'Дата реєстрації';

$txt['recent_view'] = 'Останні повідомлення на форумі.';
$txt['recent_updated'] = 'Саме останнє повідомлення';

$txt['male'] = 'Чоловіча';
$txt['female'] = 'Жіноча';

$txt['error_invalid_characters_username'] = 'Неприпустимий символ в імені користувача.';

$txt['welcome_guest'] = 'Ласкаво просимо, <b>%s</b>. Будь ласка, <a href="' . $scripturl . '?action=login">увійдіть</a> або <a href="' . $scripturl . '?action=register">зареєструйтеся</a>.';
$txt['login_or_register'] = 'Please <a href="' . $scripturl . '?action=login">login</a> or <a href="' . $scripturl . '?action=register">register</a>.';
$txt['welcome_guest_activate'] = '<br />Вам не прийшов <a href="' . $scripturl . '?action=activate">лист із кодом активації?</a>';
$txt['hello_member'] = 'Привіт,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Ласкаво Просимо,';
$txt['welmsg_hey'] = 'Привіт,';
$txt['welmsg_welcome'] = 'Ласкаво Просимо,';
$txt['welmsg_please'] = 'Будь ласка,';
$txt['select_destination'] = 'Будь ласка, виберіть призначення';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Автор';

$txt['icon_smiley'] = 'Усміхнений';
$txt['icon_angry'] = 'Злий';
$txt['icon_cheesy'] = 'Веселий';
$txt['icon_laugh'] = 'Сміх';
$txt['icon_sad'] = 'Засмучений';
$txt['icon_wink'] = 'Підморгую';
$txt['icon_grin'] = 'Сміюся';
$txt['icon_shocked'] = 'Шокований';
$txt['icon_cool'] = 'Крутий';
$txt['icon_huh'] = 'Не зрозуміло';
$txt['icon_rolleyes'] = 'Залицяюся';
$txt['icon_tongue'] = 'Показую язика';
$txt['icon_embarrassed'] = 'Стурбований';
$txt['icon_lips'] = 'Рот на замку';
$txt['icon_undecided'] = 'У замішанні';
$txt['icon_kiss'] = 'Цілую';
$txt['icon_cry'] = 'Плачу';

$txt['moderator'] = 'Модератор';
$txt['moderators'] = 'Модератори';

$txt['mark_board_read'] = 'Відзначити весь розділ прочитаним';
$txt['views'] = 'Переглядів';
$txt['new'] = 'Новий';

$txt['view_all_members'] = 'Всі користувачі';
$txt['view'] = 'Переглянути';

$txt['viewing_members'] = 'Viewing Members %1$s to %2$s';
$txt['of_total_members'] = 'of %1$s total members';

$txt['forgot_your_password'] = 'Забули пароль?';

$txt['date'] = 'Дата';
// Use numeric entities in the below string.
$txt['from'] = 'Від';
$txt['check_new_messages'] = 'Перевірити нові повідомлення';
$txt['to'] = 'Кому';

$txt['board_topics'] = 'Тем';
$txt['members_title'] = 'Користувачі';
$txt['members_list'] = 'Список користувачів';
$txt['new_posts'] = 'Нові повідомлення';
$txt['old_posts'] = 'Немає нових повідомлень';
$txt['redirect_board'] = 'Redirect Board';

$txt['sendtopic_send'] = 'Відправити';
$txt['report_sent'] = 'Your report has been sent successfully.';

$txt['time_offset'] = 'Часовий пояс';
$txt['or'] = 'або';

$txt['no_matches'] = 'Вибачте, нічого не знайдено';

$txt['notification'] = 'Повідомлення';

$txt['your_ban'] = 'Вибачте %s, Ви забанені і не можете залишати повідомлення на форумі!';
$txt['your_ban_expires'] = 'Your ban is set to expire %s';
$txt['your_ban_expires_never'] = 'This ban is not set to expire.';
$txt['ban_continue_browse'] = 'You may continue to browse the forum as a guest.';

$txt['mark_as_read'] = 'Відзначити всі повідомлення прочитаними';

$txt['hot_topics'] = 'Популярна тема (Більше %s відповідей)';
$txt['very_hot_topics'] = 'Дуже популярна тема (Більше %s відповідей)';
$txt['locked_topic'] = 'Заблокована тема';
$txt['normal_topic'] = 'Звичайна тема';
$txt['participation_caption'] = 'Тема з Вашими відповідями';

$txt['go_caps'] = 'Перейти';

$txt['print'] = 'Друк';
$txt['profile'] = 'Профіль';
$txt['topic_summary'] = 'Повідомлення в цій темі';
$txt['not_applicable'] = 'не зазначений';
$txt['message_lowercase'] = 'повідомлення';
$txt['name_in_use'] = 'Це ім\'я вже використовується іншим користувачем.';

$txt['total_members'] = 'Всього користувачів';
$txt['total_posts'] = 'Всього повідомлень';
$txt['total_topics'] = 'Всього тем';

$txt['mins_logged_in'] = 'Тривалість сесії (у хвилинах)';

$txt['preview'] = 'Попередній перегляд';
$txt['always_logged_in'] = 'Запам\'ятати';

$txt['logged'] = 'Записаний';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'від';

$txt['hours'] = 'годин';
$txt['days_word'] = 'днів';

$txt['newest_member'] = ', наш новий користувач.';

$txt['search_for'] = 'Шукати';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Привіт. Ви тут?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Форум перебуває на \'Технічному обслуговуванні\'.';

$txt['read'] = 'Прочитано';
$txt['times'] = 'раз';

$txt['forum_stats'] = 'Статистика форуму';
$txt['latest_member'] = 'Останній користувач';
$txt['total_cats'] = 'Усього категорій';
$txt['latest_post'] = 'Останнє повідомлення';

$txt['you_have'] = 'У Вас';
$txt['click'] = 'Натиснути';
$txt['here'] = 'тут';
$txt['to_view'] = 'для перегляду.';

$txt['total_boards'] = 'Всього розділів';

$txt['print_page'] = 'Друкувати сторінку';

$txt['valid_email'] = 'Email повинен бути існуючой.';

$txt['geek'] = 'Зануда!!';
$txt['info_center_title'] = $context['forum_name'] . ' - Інформаційний центр';

$txt['send_topic'] = 'Надіслати цю тему';

$txt['sendtopic_title'] = 'Надіслати посилання на цю тему &quot;%s&quot; другові.';
$txt['sendtopic_sender_name'] = 'Ваше ім\'я';
$txt['sendtopic_sender_email'] = 'Ваш email';
$txt['sendtopic_receiver_name'] = 'Ім\'я одержувача';
$txt['sendtopic_receiver_email'] = 'Email одержувача';
$txt['sendtopic_comment'] = 'Додати коментар';

$txt['allow_user_email'] = 'Allow users to email me';

$txt['check_all'] = 'Виділити Всі';

// Use numeric entities in the below string.
$txt['database_error'] = 'Помилка бази даних';
$txt['try_again'] = 'Будь ласка, повторите ще раз. Якщо помилка продовжує повторяться, звернетеся до Адміністратора.';
$txt['file'] = 'Файл';
$txt['line'] = 'Рядок';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF виявив і намагається автоматично виправити помилку у Вашій базі даних. Якщо проблема залишилася або Ви продовжуєте одержувати листи, будь ласка, звернетеся до Вашому хостера.';
$txt['database_error_versions'] = '<b>Примітка:</b> Можливо Вашій базі даних <em>потрібно </em>оновлення.  Версія файлів Вашого форуму %s, тоді як версія Вашої бази даних %s. Для усунення помилки оновите, будь ласка, форум.';
$txt['template_parse_error'] = 'Помилка оформлення форуму!';
$txt['template_parse_error_message'] = 'Можливо щось трапилося на форумі із системою шаблонів. Це тимчасова проблема, будь ласка, поверніться трохи пізніше і спробуйте знову. Якщо Ви побачите це повідомлення знову, будь ласка, звернетеся до Адміністратора форуму.<br /><br />Ви також можете спробувати <a href="javascript:location.reload();">оновити сторінку</a>.';
$txt['template_parse_error_details'] = 'Проблема із завантаженням <tt><b>%1$s</b></tt> шаблона або мовного файлу.  Будь ласка, перевірте синтаксис і спробуйте знову - запам\'ятаєте, одинарні лапки (<tt>\'</tt>) не можна ставити після слеша (<tt>\\</tt>). Щоб побачити більш докладну інформацію про помилку PHP, спробуйте <a href="' . $boardurl . '%1$s">запустити безпосередньо сам файл</a>.<br /><br />Також Ви можете <a href="javascript:location.reload();">оновити сторінку</a> або <a href="' . $scripturl . '?theme=1">використати тему за замовчуванням</a>.';

$txt['today'] = '<b>Сьогодні</b> в ';
$txt['yesterday'] = '<b>Вчора</b> в ';
$txt['new_poll'] = 'Нове голосування';
$txt['poll_question'] = 'Питання';
$txt['poll_vote'] = 'Голосувати';
$txt['poll_total_voters'] = 'Всього голосів';
$txt['shortcuts'] = 'підказка: натисніть alt+s, щоб підтвердити/відправити або alt+p, щоб попередньо переглянути повідомлення';
$txt['shortcuts_firefox'] = 'shortcuts: hit shift+alt+s to submit/post or shift+alt+p to preview';
$txt['poll_results'] = 'Переглянути результати';
$txt['poll_lock'] = 'Заблокувати голосування';
$txt['poll_unlock'] = 'Розблокувати голосування';
$txt['poll_edit'] = 'Редагувати голосування';
$txt['poll'] = 'Голосування';
$txt['one_day'] = '1 день';
$txt['one_week'] = '1 тиждень';
$txt['one_month'] = '1 місяць';
$txt['forever'] = 'Назавжди';
$txt['quick_login_dec'] = 'Увійти';
$txt['one_hour'] = '1 година';
$txt['moved'] = 'Перенесено';
$txt['moved_why'] = 'Будь ласка, вкажіть причину переміщення даної теми.';
$txt['board'] = 'Розділ';
$txt['in'] = 'в';
$txt['sticky_topic'] = 'Sticky Topic';

$txt['delete'] = 'Видалити';

$txt['your_pms'] = 'Ваші особисті повідомлення';

$txt['kilobyte'] = 'Кб';

$txt['more_stats'] = '[Докладна статистика]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Код';
$txt['code_select'] = '[Select]';
$txt['quote_from'] = 'Цитата';
$txt['quote'] = 'Цитувати';

$txt['merge_to_topic_id'] = 'ID of target topic';
$txt['split'] = 'Розділити тему';
$txt['merge'] = 'Об\'єднати тему';
$txt['subject_new_topic'] = 'Назва для нової теми';
$txt['split_this_post'] = 'Відокремити тільки це повідомлення.';
$txt['split_after_and_this_post'] = 'Відокремити це й наступні повідомлення.';
$txt['select_split_posts'] = 'Відокремити виділені повідомлення.';
$txt['new_topic'] = 'Нова тема';
$txt['split_successful'] = 'Тема успішно розділена на дві.';
$txt['origin_topic'] = 'Вихідна тема';
$txt['please_select_split'] = 'Будь ласка, виберіть повідомлення, які необхідно відокремити.';
$txt['merge_successful'] = 'Тема успішно об\'єднана.';
$txt['new_merged_topic'] = 'Нова об\'єднана тема';
$txt['topic_to_merge'] = 'Тема для об\'єднання';
$txt['target_board'] = 'Розділ для нової теми';
$txt['target_topic'] = 'Об\'єднати з темою';
$txt['merge_confirm'] = 'Ви впевнені, що хочете об\'єднати тему?';
$txt['with'] = 'з';
$txt['merge_desc'] = 'Ця функція поєднує дві теми в одну. Повідомлення будуть впорядковані по даті. Саме раннє повідомлення буде першим в об\'єднаній темі.';

$txt['set_sticky'] = 'Прикріпити тему';
$txt['set_nonsticky'] = 'Відкріпити тему';
$txt['set_lock'] = 'Заблокувати тему';
$txt['set_unlock'] = 'Розблокувати тему';

$txt['search_advanced'] = 'Розширений пошук';

$txt['security_risk'] = 'РИЗИК БЕЗПЕКИ:';
$txt['not_removed'] = 'ВИ НЕ ВИДАЛИЛИ ';
$txt['not_removed_extra'] = '%1$s is a backup of %2$s that was not generated by SMF. It can be accessed directly and used to gain unauthorised access to your forum. You should delete it immediately.';

$txt['cache_writable_head'] = 'Performance Warning';
$txt['cache_writable'] = 'The cache directory is not writable - this will adversely affect the performance of your forum.';

$txt['page_created'] = 'Сторінка згенерирована за ';
$txt['seconds_with'] = ' секунд. Запитів: ';
$txt['queries'] = '.';

$txt['report_to_mod_func'] = 'Використайте цю функцію для інформування Модераторів і Адміністраторів про образливі повідомлення.<br /><i>Будь ласка, зверніть увагу на те, що Ваша email адреса буде показана Модераторам, якщо Ви використаєте цю функцію</i>.';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Особисте повідомлення (Online)';
$txt['pm_offline'] = 'Особисте повідомлення (Offline)';
$txt['status'] = 'Статус';

$txt['go_up'] = 'Нагору';
$txt['go_down'] = 'Вниз';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2016</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Дні народження:';
$txt['events'] = 'Події:';
$txt['birthdays_upcoming'] = 'Найближчі дні народження:';
$txt['events_upcoming'] = 'Найближчі події:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Місяць:';
$txt['calendar_year'] = 'Рік:';
$txt['calendar_day'] = 'День:';
$txt['calendar_event_title'] = 'Назва події:';
$txt['calendar_event_options'] = 'Event Options';
$txt['calendar_post_in'] = 'Відправити до:';
$txt['calendar_edit'] = 'Редагувати подію';
$txt['event_delete_confirm'] = 'Видалити цю подію?';
$txt['event_delete'] = 'Видалити подію';
$txt['calendar_post_event'] = 'Відправити подію';
$txt['calendar'] = 'Календар';
$txt['calendar_link'] = 'Посилання на календар';
$txt['calendar_upcoming'] = 'Календар майбутніх подій';
$txt['calendar_today'] = 'Календар на Сьогодні';
$txt['calendar_week'] = 'Тиждень';
$txt['calendar_week_title'] = 'Week %1$d of %2$d';
$txt['calendar_numb_days'] = 'Кількість днів:';
$txt['calendar_how_edit'] = 'як відредагувати цю подію?';
$txt['calendar_link_event'] = 'Посилання на подію';
$txt['calendar_confirm_delete'] = 'Ви впевнені, що хочете видалити цю подію?';
$txt['calendar_linked_events'] = 'Посилання на події';
$txt['calendar_click_all'] = 'click to see all %1$s';

$txt['moveTopic1'] = 'Виберіть Тему для перенапрямку';
$txt['moveTopic2'] = 'Змінити назву теми';
$txt['moveTopic3'] = 'Нова тема';
$txt['moveTopic4'] = 'Змінити назву теми в кожнім повідомленні';
$txt['move_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the move.';

$txt['theme_template_error'] = 'Неможливо завантажити \'%s\' шаблон.';
$txt['theme_language_error'] = 'Неможливо завантажити \'%s\' мовний файл.';

$txt['parent_boards'] = 'Підрозділи';

$txt['smtp_no_connect'] = 'Помилка підключення до SMTP сервера';
$txt['smtp_port_ssl'] = 'Невірно зазначений SMTP порт; Для SSL серверів він повинен бути 465.';
$txt['smtp_bad_response'] = 'Не можу одержати відповідь із поштового сервера';
$txt['smtp_error'] = 'Проблема з відправленням пошти. Помилка: ';
$txt['mail_send_unable'] = 'Неможливо відправити пошту на зазначену адресу \'%s\'';

$txt['mlist_search'] = 'Пошук користувачів';
$txt['mlist_search_again'] = 'Шукати ще раз';
$txt['mlist_search_email'] = 'Пошук по email';
$txt['mlist_search_messenger'] = 'Шукати по імені ICQ, AIM, MSN, YIM';
$txt['mlist_search_group'] = 'Шукати по статусі';
$txt['mlist_search_name'] = 'Шукати по імені';
$txt['mlist_search_website'] = 'Шукати за назвою сайту';
$txt['mlist_search_results'] = 'Шукати';
$txt['mlist_search_by'] = 'Search by %1$s';
$txt['mlist_menu_view'] = 'View the memberlist';

$txt['attach_downloaded'] = 'завантажено';
$txt['attach_viewed'] = 'переглянуто';
$txt['attach_times'] = 'раз';

$txt['settings'] = 'Настроювання';
$txt['never'] = 'Ніколи';
$txt['more'] = 'ще';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Вибачите %s, але Ви забанені і не можете приймати і відсилати особисті повідомлення на цьому форумі.';
$txt['ban_reason'] = 'Причина';

$txt['tables_optimized'] = 'Таблиці Бази Даних оптимізовані';

$txt['add_poll'] = 'Додати голосування';
$txt['poll_options6'] = 'Ви можете вибрати %s варіантів відповіді.';
$txt['poll_remove'] = 'Видалити голосування';
$txt['poll_remove_warn'] = 'Ви впевнені, що хочете видалити голосування??';
$txt['poll_results_expire'] = 'Результати будуть показані, після того як голосування буде закінчене';
$txt['poll_expires_on'] = 'Голосування закінчується';
$txt['poll_expired_on'] = 'Голосування закінчилося';
$txt['poll_change_vote'] = 'Видалити Голос';
$txt['poll_return_vote'] = 'Настроювання Голосування';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Approve selected';
$txt['quick_mod_remove'] = 'Видалити виділені';
$txt['quick_mod_lock'] = 'Заблокувати виділені';
$txt['quick_mod_sticky'] = 'Прикріпити виділені';
$txt['quick_mod_move'] = 'Перемістити виділені до';
$txt['quick_mod_merge'] = 'З\'єднати виділені';
$txt['quick_mod_markread'] = 'Позначити виділені як прочитані';
$txt['quick_mod_go'] = 'Вперед!';
$txt['quickmod_confirm'] = 'Ви впевнені?';

$txt['spell_check'] = 'Перевірка орфографії';

$txt['quick_reply'] = 'Швидка відповідь';
$txt['quick_reply_desc'] = 'Із <i>швидкою відповіддю</i> Ви також можете використати BBС код і смайли.';
$txt['quick_reply_warning'] = 'Увага: ця тема заблокована!<br />Відповісти в ній може тільки модератор або адміністратор форуму.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it\'s been approved by a moderator.';

$txt['notification_enable_board'] = 'Ви впевнені, що хочете одержувати повідомлення при створенні нових тем у даному розділі форуму?';
$txt['notification_disable_board'] = 'Відключити повідомлення?';
$txt['notification_enable_topic'] = 'Ви впевнені, що хочете одержувати повідомлення при нових відповідях у цій темі?';
$txt['notification_disable_topic'] = 'Відключити повідомлення?';

$txt['report_to_mod'] = 'Повідомити модератору';
$txt['issue_warning_post'] = 'Issue a warning because of this message';

$txt['unread_topics_visit'] = 'Непрочитані теми';
$txt['unread_topics_visit_none'] = 'Немає непрочитаних тем з моменту Вашого останнього відвідування.  <a href="' . $scripturl . '?action=unread;all">Переглянути всі непрочитані теми</a>.';
$txt['unread_topics_all'] = 'Всі непрочитані теми';
$txt['unread_replies'] = 'Непрочитані теми';

$txt['who_title'] = 'Хто Online';
$txt['who_and'] = ' і ';
$txt['who_viewing_topic'] = ' дивляться цю тему.';
$txt['who_viewing_board'] = ' дивляться цей розділ.';
$txt['who_member'] = 'Користувач';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS!';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Гість';
$txt['guests'] = 'Гостей';
$txt['user'] = 'Користувач';
$txt['users'] = 'Користувачів';
$txt['hidden'] = 'Схованих';
$txt['buddy'] = 'Друг';
$txt['buddies'] = 'Друзі';
$txt['most_online_ever'] = 'Максимум Online';
$txt['most_online_today'] = 'Максимум Online сьогодні';

$txt['merge_select_target_board'] = 'Вибрати розділ для об\'єднаної теми';
$txt['merge_select_poll'] = 'Вибрати голосування, для об\'єднаної теми';
$txt['merge_topic_list'] = 'Вибрати теми для об\'єднання';
$txt['merge_select_subject'] = 'Назва об\'єднаної теми';
$txt['merge_custom_subject'] = 'Вибрати Назву';
$txt['merge_enforce_subject'] = 'Змінити тему у всіх повідомлень';
$txt['merge_include_notifications'] = 'Включити Повідомлення?';
$txt['merge_check'] = 'Об\'єднати?';
$txt['merge_no_poll'] = 'Немає голосування';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Іконка';
$txt['message_icon'] = 'Message Icon';

$txt['smileys_current'] = 'Поточний набір смайлів';
$txt['smileys_none'] = 'Немає смайлів';
$txt['smileys_forum_board_default'] = 'Форум/Розділ за замовчуванням';

$txt['search_results'] = 'Результати пошуку';
$txt['search_no_results'] = 'Вибачите, нічого не знайдено';

$txt['totalTimeLogged1'] = 'Загальний час, проведений на форумі: ';
$txt['totalTimeLogged2'] = ' днів, ';
$txt['totalTimeLogged3'] = ' годин і ';
$txt['totalTimeLogged4'] = ' хвилин.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'г ';
$txt['totalTimeLogged7'] = 'х';

$txt['approve_thereis'] = '<b>Увага!</b>';
$txt['approve_thereare'] = '<b>Увага!</b>';
$txt['approve_member'] = 'Один користувач';
$txt['approve_members'] = 'користувачі';
$txt['approve_members_waiting'] = 'очікують схвалення.';

$txt['notifyboard_turnon'] = 'Ви хочете одержувати повідомлення про нові теми в цьому розділі?';
$txt['notifyboard_turnoff'] = 'Ви не хочете одержувати повідомлення про нові теми в цьому розділі?';

$txt['activate_code'] = 'Ваш код активації';

$txt['find_members'] = 'Пошук користувачів';
$txt['find_username'] = 'Введіть ім\'я користувача або email адресу';
$txt['find_buddies'] = 'Відображати тільки друзів?';
$txt['find_wildcards'] = 'Доступні символи для пошуку по масці: *, ?';
$txt['find_no_results'] = 'Нічого не знайдено';
$txt['find_results'] = 'Результати';
$txt['find_close'] = 'Закрити';

$txt['unread_since_visit'] = 'Показати нові повідомлення з Вашого останнього візиту.';
$txt['show_unread_replies'] = 'Показати нові відповіді на Ваші повідомлення.';

$txt['change_color'] = 'Змінити кольори';

$txt['quickmod_delete_selected'] = 'Видалити обрані';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Ви одержали одне або кілька особистих повідомлень.\\nПереглянути їх (у новому вікні)?';

$txt['previous_next_back'] = '&laquo; попередня тема';
$txt['previous_next_forward'] = 'наступна тема &raquo;';

$txt['movetopic_auto_board'] = '[РОЗДІЛ ФОРУМУ]';
$txt['movetopic_auto_topic'] = '[ПОСИЛАННЯ НА ТЕМУ]';
$txt['movetopic_default'] = 'Тема перенесена до ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Згорнути/Розгорнути.';

$txt['mark_unread'] = 'Відзначити непрочитаними';

$txt['ssi_not_direct'] = 'Будь ласка, не звертайтеся прямо до файлу SSI.php через адресу(URL), можливо, Ви захочете використати шлях (%s) або додати ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php не може завантажити сесію! Можливо це проблема пов\'язана з виходом або іншими функціями - будь ласка переконаєтеся, що SSI.php вставлений на самому початку перед всіма іншими скриптами!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Попередній перегляд';
$txt['preview_fetch'] = 'Очікування попереднього перегляду...';
$txt['preview_new'] = 'Нове повідомлення';
$txt['error_while_submitting'] = 'Наступні помилки виникли при спробі відправити повідомлення:';
$txt['error_old_topic'] = 'Warning: this topic has not been posted in for at least %1$d days.<br />Unless you\'re sure you want to reply, please consider starting a new topic.';

$txt['split_selected_posts'] = 'Обрані повідомлення';
$txt['split_selected_posts_desc'] = 'Нижче перебувають повідомлення, які формують тему після поділу.';
$txt['split_reset_selection'] = 'зняти виділення';

$txt['modify_cancel'] = 'Скасувати';
$txt['mark_read_short'] = 'Позначити прочитаними';

$txt['pm_short'] = 'Особисті повідомлення';
$txt['pm_menu_read'] = 'Read your messages';
$txt['pm_menu_send'] = 'Send a message';

$txt['hello_member_ndt'] = 'Привіт,';

$txt['unapproved_posts'] = 'Unapproved Posts (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Завантажується...';

$txt['mod_reports_waiting'] = 'There are currently %1$d moderator reports open.';

$txt['view_unread_category'] = 'Unread Posts';
$txt['verification'] = 'Verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_request_new'] = 'Request another image';

// Sub menu labels
$txt['summary'] = 'Summary';
$txt['account'] = 'Account Settings';
$txt['forumprofile'] = 'Forum Profile';

$txt['modSettings_title'] = 'Features and Options';
$txt['package'] = 'Package Manager';
$txt['errlog'] = 'Error Log';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_attachments'] = 'Unapproved Attachments';
$txt['mc_unapproved_poststopics'] = 'Unapproved Posts and Topics';
$txt['mc_reported_posts'] = 'Reported Posts';
$txt['modlog_view'] = 'Moderation Log';
$txt['calendar_menu'] = 'View Calendar';

//!!! Send email strings - should move?
$txt['send_email'] = 'Send Email';
$txt['send_email_disclosed'] = 'Note this will be visible to the recipient.';
$txt['send_email_subject'] = 'Email Subject';

$txt['ignoring_user'] = 'You are ignoring this user.';
$txt['show_ignore_user_post'] = 'Show me the post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Filesize';
$txt['subscribe_webslice'] = 'Subscribe to Webslice';

// Restore topic
$txt['restore_topic'] = 'Restore Topic';
$txt['restore_message'] = 'Restore';
$txt['quick_mod_restore'] = 'Restore Selected';

// Editor prompt.
$txt['prompt_text_email'] = 'Please enter the email address.';
$txt['prompt_text_ftp'] = 'Please enter the ftp address.';
$txt['prompt_text_url'] = 'Please enter the URL you wish to link to.';
$txt['prompt_text_img'] = 'Enter image location';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Delete Item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Sub templates: ';
$txt['debug_language_files'] = 'Language files: ';
$txt['debug_stylesheets'] = 'Style sheets: ';
$txt['debug_files_included'] = 'Files included: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'show';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries used: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries used: %1$d, %2$d warnings.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '[Show Queries]';
$txt['debug_hide_queries'] = '[Hide Queries]';

?>
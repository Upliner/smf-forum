<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Особисті Повідомлення';
$txt['send_message'] = 'Відправити повідомлення';
$txt['pm_add'] = 'Add';
$txt['make_bcc'] = 'Add BCC';
$txt['pm_to'] = 'Кому';
$txt['pm_bcc'] = 'Копія';
$txt['inbox'] = 'Вхідні';
$txt['conversation'] = 'Conversation';
$txt['messages'] = 'Messages';
$txt['sent_items'] = 'Sent Items';
$txt['new_message'] = 'Нове Повідомлення';
$txt['delete_message'] = 'Видалити Повідомлення';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Видалити всі особисті повідомлення';
$txt['delete_all_confirm'] = 'Ви впевнені, що хочете видалити всі повідомлення?';
$txt['recipient'] = 'Одержувач';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Нове Особисте Повідомлення: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Тільки що Ви одержали особисте повідомлення від SENDER на ' . $context['forum_name'] . '.\\n\\nВажливо: Запам\'ятаєте, це всього лише повідомлення. Будь ласка не відповідайте на цей email.\\n\\nВідправлене Вам повідомлення:\\n\\nMESSAGE';
$txt['pm_multiple'] = '(одержувачі: \'ім\'я1, ім\'я2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Відповісти на це Особисте Повідомлення тут:';

$txt['delete_selected_confirm'] = 'Ви впевнені, що хочете видалити всі виділені особисті повідомлення?';

$txt['sent_to'] = 'Одержувач';
$txt['reply_to_all'] = 'Відповісти Всім';
$txt['delete_conversation'] = 'Delete Conversation';

$txt['pm_capacity'] = 'Кількість';
$txt['pm_currently_using'] = '%s повідомлень, %s%% повний.';
$txt['pm_sent'] = 'Your message has been sent successfully.';

$txt['pm_error_user_not_found'] = 'Не можу знайти користувача \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Користувач \'%s\' заблокував Ваше особисте повідомлення.';
$txt['pm_error_data_limit_reached'] = 'Повідомлення не може бути відправлене \'%s\' скринька переповнена!';
$txt['pm_error_user_cannot_read'] = 'User \'%1$s\' can not receive personal messages.';
$txt['pm_successfully_sent'] = 'Повідомлення вдало відправлене \'%s\'.';
$txt['pm_send_report'] = 'Відправити звіт';
$txt['pm_save_outbox'] = 'Зберігати копію у висхідних';
$txt['pm_undisclosed_recipients'] = 'Сховані одержувачі';
$txt['pm_too_many_recipients'] = 'Ви не можете відправити особисті повідомлення більше %d одержувачам за один раз.';

$txt['pm_read'] = 'Прочитати';
$txt['pm_replied'] = 'Відповісти';

// Message Pruning.
$txt['pm_prune'] = 'Видалити Повідомлення';
$txt['pm_prune_desc1'] = 'Видалити всі особисті повідомлення старіші, ніж';
$txt['pm_prune_desc2'] = 'днів.';
$txt['pm_prune_warning'] = 'Ви впевнені, що хочете очистити Ваші особисті повідомлення?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Подальші дії';
$txt['pm_actions_delete_selected'] = 'Видалити виділені';
$txt['pm_actions_filter_by_label'] = 'Фільтрувати по мітках';
$txt['pm_actions_go'] = 'Відправити';

// Manage Labels Screen.
$txt['pm_apply'] = 'Прийняти';
$txt['pm_manage_labels'] = 'Керування Ярликами';
$txt['pm_labels_delete'] = 'Ви впевнені, що хочете видалити виділені ярлики?';
$txt['pm_labels_desc'] = 'Тут Ви можете додавати, редагувати і видаляти папки у Вашому центрі особистих повідомлень.';
$txt['pm_label_add_new'] = 'Створити новий ярлик';
$txt['pm_label_name'] = 'Ім\'я ярлика';
$txt['pm_labels_no_exist'] = 'У Вас створених ярликів!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Ярлик';
$txt['pm_msg_label_title'] = 'Створити ярлик';
$txt['pm_msg_label_apply'] = 'Додати ярлик';
$txt['pm_msg_label_remove'] = 'Видалити ярлик';
$txt['pm_msg_label_inbox'] = 'Вхідні';
$txt['pm_sel_label_title'] = 'Існуючі папки';

// Sidebar Headings.
$txt['pm_labels'] = 'Ярлики';
$txt['pm_messages'] = 'Повідомлень';
$txt['pm_actions'] = 'Actions';
$txt['pm_preferences'] = 'Переваги';

$txt['pm_is_replied_to'] = 'Ви відповіли на це повідомлення.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Повідомити Адміністраторові';
$txt['pm_report_title'] = 'Повідомити про Особисте Повідомлення';
$txt['pm_report_desc'] = 'Із цієї сторінки Ви можете повідомити про отримане Вами особисте повідомлення Адміністрації форуму. Будь ласка, переконаєтеся, що Ви написали причину, по якій Ви повідомляєте про Ваше повідомлення.';
$txt['pm_report_admins'] = 'Відправити Адміністраторові';
$txt['pm_report_all_admins'] = 'Відправити всім Адміністраторам форуму';
$txt['pm_report_reason'] = 'Причина';
$txt['pm_report_message'] = 'Відправити';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[Звіт] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} відправив звіт про особисте повідомлення, відправлене {SENDER}, з наступних причин:';
$txt['pm_report_pm_other_recipients'] = 'Інші одержувачі повідомлення:';
$txt['pm_report_pm_hidden'] = '%d схований (-і) одержувач (-і)';
$txt['pm_report_pm_unedited_below'] = 'Нижче зміст оригінального особистого повідомлення про яке посилали звіт:';
$txt['pm_report_pm_sent'] = 'Відправники:';

$txt['pm_report_done'] = 'Спасибі за відправлений звіт. Незабаром Ви одержите повідомлення від Адміністрації';
$txt['pm_report_return'] = 'Повернуться у вхідні';

$txt['pm_search_title'] = 'Пошук Особистих Повідомлень';
$txt['pm_search_bar_title'] = 'Пошук Повідомлень';
$txt['pm_search_text'] = 'Пошук';
$txt['pm_search_go'] = 'Пошук';
$txt['pm_search_advanced'] = 'Розширений Пошук';
$txt['pm_search_user'] = 'по користувачі';
$txt['pm_search_match_all'] = 'Утримуючі всі слова';
$txt['pm_search_match_any'] = 'Утримуючі будь-які слова';
$txt['pm_search_options'] = 'Властивості';
$txt['pm_search_post_age'] = 'За віком';
$txt['pm_search_show_complete'] = 'Показувати повністю повідомлення в результатах.';
$txt['pm_search_subject_only'] = 'Пошук тільки по темі і авторові.';
$txt['pm_search_between'] = 'Між';
$txt['pm_search_between_and'] = 'і';
$txt['pm_search_between_days'] = 'днів';
$txt['pm_search_order'] = 'Результати пошуку';
$txt['pm_search_choose_label'] = 'Виберіть параметри пошуку або пошук всього';

$txt['pm_search_results'] = 'Результати Пошуку';
$txt['pm_search_none_found'] = 'Повідомлень не знайдене';

$txt['pm_search_orderby_relevant_first'] = 'Доречні першим';
$txt['pm_search_orderby_recent_first'] = 'Останні першими';
$txt['pm_search_orderby_old_first'] = 'Старі першими';

$txt['pm_visual_verification_label'] = 'Перевірка';
$txt['pm_visual_verification_desc'] = 'Будь ласка, введіть код із зображення, показаного вище для відправлення приватного повідомлення.';

$txt['pm_settings'] = 'Change Settings';
$txt['pm_change_view'] = 'Change View';

$txt['pm_manage_rules'] = 'Manage Rules';
$txt['pm_manage_rules_desc'] = 'Message rules allow you to automatically sort incoming messages dependant on a set of criteria you define. Below are all the rules you currently have setup. To edit a rule simply click the rule name.';
$txt['pm_rules_none'] = 'You have not yet setup any message rules.';
$txt['pm_rule_title'] = 'Rule';
$txt['pm_add_rule'] = 'Add New Rule';
$txt['pm_apply_rules'] = 'Apply Rules Now';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Are you sure you wish to apply the current rules to all personal messages?';
$txt['pm_edit_rule'] = 'Edit Rule';
$txt['pm_rule_save'] = 'Save Rule';
$txt['pm_delete_selected_rule'] = 'Delete Selected Rules';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Are you sure you wish to delete the selected rules?';
$txt['pm_rule_name'] = 'Name';
$txt['pm_rule_name_desc'] = 'Name to remember this rule by';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Description';
$txt['pm_rule_not_defined'] = 'Add some criteria to begin building this rule description.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Note:</strong> You appear to have javascript disabled. We highly recommend you enable javascript to use this feature.</span>';
$txt['pm_rule_criteria'] = 'Criteria';
$txt['pm_rule_criteria_add'] = 'Add Criteria';
$txt['pm_rule_criteria_pick'] = 'Choose Criteria';
$txt['pm_rule_mid'] = 'Sender Name';
$txt['pm_rule_gid'] = 'Sender\'s Group';
$txt['pm_rule_sub'] = 'Message Subject Contains';
$txt['pm_rule_msg'] = 'Message Body Contains';
$txt['pm_rule_bud'] = 'Sender is Buddy';
$txt['pm_rule_sel_group'] = 'Select Group';
$txt['pm_rule_logic'] = 'When Checking Criteria';
$txt['pm_rule_logic_and'] = 'All criteria must be met';
$txt['pm_rule_logic_or'] = 'Any criteria can be met';
$txt['pm_rule_actions'] = 'Actions';
$txt['pm_rule_sel_action'] = 'Select an Action';
$txt['pm_rule_add_action'] = 'Add Action';
$txt['pm_rule_label'] = 'Label message with';
$txt['pm_rule_sel_label'] = 'Select Label';
$txt['pm_rule_delete'] = 'Delete Message';
$txt['pm_rule_no_name'] = 'You forgot to enter a name for the rule.';
$txt['pm_rule_no_criteria'] = 'A rule must have at least one criteria and one action set.';
$txt['pm_rule_too_complex'] = 'The rule you are creating is too long for SMF to store. Try breaking it up into smaller rules.';

$txt['pm_readable_and'] = '<em>and</em>';
$txt['pm_readable_or'] = '<em>or</em>';
$txt['pm_readable_start'] = 'If ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'message is from &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'sender is from the &quot;{GROUP}&quot; group';
$txt['pm_readable_subject'] = 'message subject contains &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'message body contains &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'sender is a buddy';
$txt['pm_readable_label'] = 'apply label &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'delete the message';
$txt['pm_readable_then'] = '<strong>then</strong>';

?>
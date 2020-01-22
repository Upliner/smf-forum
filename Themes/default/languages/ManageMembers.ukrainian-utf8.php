<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Groups';
$txt['viewing_groups'] = 'Viewing Membergroups';

$txt['membergroups_title'] = 'Керування групами користувачів';
$txt['membergroups_description'] = 'Групи користувачів мають певні параметри настроювання і свої права доступу. Деякі групи користувачів залежать від кількості повідомлень. Ви можете призначати групу користувачеві, зайшовши в його профіль і, змінивши настроювання облікового запису.';
$txt['membergroups_modify'] = 'Змінити';

$txt['membergroups_add_group'] = 'Додати групу';
$txt['membergroups_regular'] = 'Основні групи';
$txt['membergroups_post'] = 'Групи засновані на кількості повідомлень';

$txt['membergroups_group_name'] = 'Назва нової групи';
$txt['membergroups_new_board'] = 'Доступні розділи';
$txt['membergroups_new_board_desc'] = 'Розділи доступні для групи користувачів';
$txt['membergroups_new_board_post_groups'] = '<em>Примітка: звичайно, для того щоб залишити повідомлення не потрібно особливих прав, тому як група за замовчуванням надає ці права</em>';
$txt['membergroups_new_as_inherit'] = 'inherit from';
$txt['membergroups_new_as_type'] = 'за типом';
$txt['membergroups_new_as_copy'] = 'базується на';
$txt['membergroups_new_copy_none'] = '(немає)';
$txt['membergroups_can_edit_later'] = 'Ви можете відредагувати це пізніше.';

$txt['membergroups_edit_group'] = 'Редагувати групи користувачів';
$txt['membergroups_edit_name'] = 'Назва групи';
$txt['membergroups_edit_inherit_permissions'] = 'Inherit Permissions';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Select &quot;No&quot; to enable group to have own permission set.';
$txt['membergroups_edit_inherit_permissions_no'] = 'No - Use Unique Permissions';
$txt['membergroups_edit_inherit_permissions_from'] = 'Inherit From';
$txt['membergroups_edit_hidden'] = 'Visibility';
$txt['membergroups_edit_hidden_no'] = 'Visible';
$txt['membergroups_edit_hidden_boardindex'] = 'Visible - Except in Group Key';
$txt['membergroups_edit_hidden_all'] = 'Invisible';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Are you sure you want to disallow assignment of this group as a users primary group?\\n\\nDoing so will restrict assignment to additional groups only, and will update all current &quot;primary&quot; members to have it as an additional group only.';
$txt['membergroups_edit_desc'] = 'Group description';
$txt['membergroups_edit_group_type'] = 'Group Type';
$txt['membergroups_edit_select_group_type'] = 'Select Group Type';
$txt['membergroups_group_type_private'] = 'Private <span class="smalltext">(Membership must be assigned)</span>';
$txt['membergroups_group_type_protected'] = 'Protected <span class="smalltext">(Only administrators can manage and assign)</span>';
$txt['membergroups_group_type_request'] = 'Requestable <span class="smalltext">(User may request membership)</span>';
$txt['membergroups_group_type_free'] = 'Free <span class="smalltext">(User may leave and join group at will)</span>';
$txt['membergroups_group_type_post'] = 'Post Based <span class="smalltext">(Membership based on post count)</span>';
$txt['membergroups_min_posts'] = 'Необхідна кількість повідомлень';
$txt['membergroups_online_color'] = 'Кольори в списку online';
$txt['membergroups_star_count'] = 'Кількість зображень(зірочок)';
$txt['membergroups_star_image'] = 'Ім\'я файлу емблеми';
$txt['membergroups_star_image_note'] = 'Ви можете використати параметр $language для вказання тої чи іншої мови, якщо це потрібно';
$txt['membergroups_max_messages'] = 'Максимальна кількість особистих повідомлень';
$txt['membergroups_max_messages_note'] = '0 - необмежено';
$txt['membergroups_edit_save'] = 'Зберегти';
$txt['membergroups_delete'] = 'Видалити';
$txt['membergroups_confirm_delete'] = 'Ви впевнені, що хочете видалити цю групу?!';

$txt['membergroups_members_title'] = 'Показати всіх користувачів групи';
$txt['membergroups_members_group_members'] = 'Group Members';
$txt['membergroups_members_no_members'] = 'Ця група зараз порожня';
$txt['membergroups_members_add_title'] = 'Додати користувача в цю групу';
$txt['membergroups_members_add_desc'] = 'Список доданих користувачів';
$txt['membergroups_members_add'] = 'Додати користувачів';
$txt['membergroups_members_remove'] = 'Видалити з групи';
$txt['membergroups_members_last_active'] = 'Last Active';
$txt['membergroups_members_additional_only'] = 'Add as additional group only.';
$txt['membergroups_members_group_moderators'] = 'Group Moderators';
$txt['membergroups_members_description'] = 'Description';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Are you sure you wish to remove yourself from the Administration group?';

$txt['membergroups_postgroups'] = 'Групи користувачів, які мають права на відсилання повідомлень';
$txt['membergroups_settings'] = 'Властивості групи користувачів';
$txt['groups_manage_membergroups'] = 'Групи, яким дозволено змінювати групи користувачів';
$txt['membergroups_select_permission_type'] = 'Встановити права';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'вибрати розділи';
$txt['membergroups_members_top'] = 'Members';
$txt['membergroups_name'] = 'Name';
$txt['membergroups_stars'] = 'Stars';

$txt['admin_browse_approve'] = 'Користувачі, облікові записи яких, очікують схвалення';
$txt['admin_browse_approve_desc'] = 'Тут Ви можете керувати всіма користувачами, облікові записи, яких очікують схвалення.';
$txt['admin_browse_activate'] = 'Облікові записи користувачів, які очікують активацію';
$txt['admin_browse_activate_desc'] = 'Список користувачів, які очікують активацію.';
$txt['admin_browse_awaiting_approval'] = 'Очікують схвалення <span style="font-weight: normal">(%d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Очікують активації <span style="font-weight: normal">(%d)</span>';

$txt['admin_browse_username'] = 'Ім\'я користувача';
$txt['admin_browse_email'] = 'Email адреса ';
$txt['admin_browse_ip'] = 'IP адреса';
$txt['admin_browse_registered'] = 'Зареєстрований';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'З виділеними';
$txt['admin_browse_no_members_approval'] = 'Немає користувачів, які очікує схвалення.';
$txt['admin_browse_no_members_activate'] = 'Немає користувачів, які очікує активації.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'всіх виділених користувачів?';
$txt['admin_browse_outstanding_warn'] = 'всіх користувачів?';
$txt['admin_browse_w_approve'] = 'Підтвердити';
$txt['admin_browse_w_activate'] = 'Активувати';
$txt['admin_browse_w_delete'] = 'Видалити';
$txt['admin_browse_w_reject'] = 'Відхилити';
$txt['admin_browse_w_remind'] = 'Повідомити';
$txt['admin_browse_w_approve_deletion'] = 'Підтвердити (Видалення облікового запису)';
$txt['admin_browse_w_email'] = 'і відправити email';
$txt['admin_browse_w_approve_require_activate'] = 'Схвалити і активувати';

$txt['admin_browse_filter_by'] = 'Фільтрувати по';
$txt['admin_browse_filter_show'] = 'Відображення';
$txt['admin_browse_filter_type_0'] = 'Неактивовані облікові записи';
$txt['admin_browse_filter_type_2'] = 'Неактивовані Email зміни';
$txt['admin_browse_filter_type_3'] = 'Несхвалені нові облікові записи';
$txt['admin_browse_filter_type_4'] = 'Неодобрені на видалення облікові записи';
$txt['admin_browse_filter_type_5'] = 'Неодобрені облікові записи, які не підходять під віковий ценз';

$txt['admin_browse_outstanding'] = 'Неактивовані користувачі';
$txt['admin_browse_outstanding_days_1'] = 'З усіма користувачами зареєстрованими більше';
$txt['admin_browse_outstanding_days_2'] = 'днів назад';
$txt['admin_browse_outstanding_perform'] = 'Виконати наступні дії';
$txt['admin_browse_outstanding_go'] = 'Виконати дію';

$txt['check_for_duplicate'] = 'Check for Duplicates';
$txt['dont_check_for_duplicate'] = 'Don\'t Check for Duplicates';
$txt['duplicates'] = 'Duplicates';

$txt['not_activated'] = 'Not activated';

?>
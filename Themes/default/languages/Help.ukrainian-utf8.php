<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Закрити вікно';

$helptxt['manage_boards'] = '
        <b>Редагування розділів</b><br />
        У цьому меню Ви можете створювати/переміщати/видаляти розділи, і категорії
        над ними. Наприклад, якщо у Вас великий сайт, який надає інформацію про &quot;Спорт&quot;, &quot;Машини&quot; і &quot;Музику&quot; - це
        будуть Категорії верхнього рівня, які Ви створите. Під кожною із цих
        категорій, Ви можете створити ієрархічні &quot;підкатегорії&quot;,
        або &quot;розділи&quot;. Це проста ієрархія, з наступною структурою: <br />
        <ul>
                <li>
                        <b>Спорт</b>
                        &nbsp;- &quot;категорія&quot;
                </li>
                <ul>
                        <li>
                                <b>Бейсбол</b>
                                &nbsp;- Розділ під категорією &quot;Спорт&quot;
                        </li>
                        <ul>
                                <li>
                                        <b>Статистика</b>
                                        &nbsp;- Підрозділ розділу &quot;Бейсбол&quot;
                                </li>
                        </ul>
                        <li><b>Футбол</b>
                        &nbsp;- Розділ під категорією &quot;Спорт&quot;</li>
                </ul>
        </ul>
        Категорії дозволяють Вам розділити форум на основні теми (&quot;Машини,
        Спорт&quot;), і &quot;Розділи&quot; під ними фактично є темами в кожній з яких
        користувачі можуть писати повідомлення. Категорії дозволяють людям
        швидко знайти те, що їх цікавить.<br />
        Адміністративні функції для цього пункту меню, потрібні для створення нових розділів
        під кожною категорією.';

$helptxt['edit_news'] = '<b>Редагування Новин Форуму</b><br />
        Це дозволяє Вам встановлювати текст для пунктів новин, які відображпються на головній сторінці форуму.
        Додайте будь-який пункт, який хочете (наприклад, &quot;Не пропустити конференцію в цей вівторок&quot;). Кожен пункт новин повинен
        бути розташований в окремій рамці, і вони відображаються у випадковому порядку.';

$helptxt['view_members'] = '
        <ul>
                <li>
                        <b>Перегляд всіх користувачів</b><br />
                        Перегляд всіх користувачів форуму. Вам надається список імен користувачів з посиланнями. Ви можете клікнути
                        на кожне з імен, щоб переглянути профілі користувачів (домашня сторінка, вік, і т.д.), як Адміністратор
                        Ви можете змінювати ці параметри. Ви маєте повний контроль над користувачами, включаючи
                        можливість видалити їх сфорума.<br /><br />
                </li>
                <li>
                        <b>Очікування Підтвердження</b><br />
                        Цей розділ показується, тільки якщо Ви включили підтвердження адміністратором нових реєстрацій. Любий, хто реєструється для на Вашому
                        форумі стане повноцінним користувачем, тільки після того як його кандидатура буде схвалена адміністратором. Цей розділ показує список всіх тих користувачів, хто
                        усе ще очікує схвалення, разом з їх email і IP адресами. Ви можете вибрати дозволити або відхилити  (видалити)
                        будь-якого користувача в списку, відзначивши галочкою, поле напроти користувача і, вибравши дію з меню, що випадає, у нижній частині
                        екрана. Коли відхиляєте користувача Ви можете вибрати видалити його, повідомивши про Ваше рішення або не роблячи цього.<br /><br />
                </li>
                <li>
                        <b>Очікування Активації</b><br />
                        Цей розділ буде видний, тільки якщо на форумі включений режим активації облікових записів. Цей розділ буде показувати список всіх
                        користувачів хто все ще не активував свій обліковий запис. У цьому розділі Ви можете дозволити, відхилити або нагадати
                        користувачам, що вони не завершили реєстрацію. Так само як і вище, Ви можете вибрати відправити email користувачам для повідомлення їх про
                        зроблені Вами дії.<br /><br />
                </li>
        </ul>';

$helptxt['ban_members'] = '<b>Бан користувачів</b><br />
        SMF надає можливість &quot;банити&quot; користувачів, для того, щоб не допускати тих людей, котрі порушили правила форуму,
        розміщаючи спам, флуд, і т.д. Це дозволяє Вам вибрати тих користувачів, кого Ви не хочете бачити на Вашому форумі. Як адміністратор,
        при перегляді повідомлень, Ви можете бачити IP адресу кожного користувача, яка була використана при розміщенні даного повідомлення. У бан списку,
        Ви просто вказуєте цю IP адресу, зберігаєте її, і вони більше не зможуть писати з цієї IP адреси.<br />Ви так само можете
        банити користувачів по їх email адресах.';

$helptxt['featuresettings'] = '<strong>Features and Options</strong><br />
	There are several features in this section that can be changed to your preference.';

$helptxt['securitysettings'] = '<strong>Security and Moderation</strong><br />
	This section contains settings relating to the security and moderation of your forum.';

$helptxt['modsettings'] = '<b>Зміна функцій і настроювань</b><br />
        Існує кілька функцій у цьому розділі, які Ви можете змінити на свій розсуд. Настроювання для встановлених модів, так само звичайно з\'являються тут.';

$helptxt['number_format'] = '<b>Формат чисел</b><br />
        Ви можете використати ці параметри для зміни формату чисел, у якому вони будуть відображатися користувачам на Вашому форумі. Параметри формату наступні:<br />
        <div style="margin-left: 2ex;">1,234.00</div>,<br />
        де \',\' символ, використовуваний для поділу груп у тисячах, \'.\' символ, використовуваний як крапка в десятковому дробі, що відокремлює ціле від дробу.';

$helptxt['time_format'] = '<b>Формат Часу</b><br />
        У Вас є великі можливості для настроювання того, як час і дата будуть виглядати на форумі.
        Перетворення виробляються за допомогою PHP-функції strftime і описуються нижче (більш докладно можна прочитати за адресою <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net</a>).<br />
        <br />
        Наступні букви визначають наступний формат: <br />
        <span class="smalltext">
        &nbsp;&nbsp;%a - коротка назва дня тижня;<br />
        &nbsp;&nbsp;%A - повна назва дня тижня;<br />
        &nbsp;&nbsp;%b - коротка назва місяця;<br />
        &nbsp;&nbsp;%B - повна назва місяця;<br />
        &nbsp;&nbsp;%d - день у місяці (з 01 по 31);<br />
        &nbsp;&nbsp;%D<b>*</b> - те ж що й %m/%d/%y;<br />
        &nbsp;&nbsp;%e<b>*</b> - день у місяці (від 1 до 31);<br />
        &nbsp;&nbsp;%H - година, використовує 24-х годинний час (від 00 до 23); <br />
        &nbsp;&nbsp;%I - година, використовує12-ти годинний час (від 01 до 12); <br />
        &nbsp;&nbsp;%m - місяць, як число (від 01 до 12); <br />
        &nbsp;&nbsp;%M - хвилина, як число; <br />
        &nbsp;&nbsp;%p - &quot;am&quot; або &quot;pm&quot; у відповідності з часом доби;<br />
        &nbsp;&nbsp;%R<b>*</b> - час в 24-х годинному  поданні часу;<br />
        &nbsp;&nbsp;%S - секунди в цифровому форматі;<br />
        &nbsp;&nbsp;%T<b>*</b> - поточний час, те ж що %H:%M:%S; <br />
        &nbsp;&nbsp;%y - 2 цифри року (від 00 до 99); <br />
        &nbsp;&nbsp;%Y - 4 цифри року;<br />
        &nbsp;&nbsp;%Z - тимчасова зона, ім\'я або скорочення; <br />
        &nbsp;&nbsp;%% - дослівно знак \'%\'; <br />
        <br />
        <i>* Не працює на Windows-серверах</i></span>';

$helptxt['live_news'] = '<b>Останні новини</b><br />
        У цій рамці відображаються останні оновлені новини з <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.
        Переглядайте їх, час від часу, для одержання інформації про оновлення програмного забеспечення форуму, нові релізи, і важливу інформацію від SimpleMachines.';

$helptxt['registrations'] = '<b>Керування Реєстрацією</b><br />
        Цей розділ містить всі функції, які можуть бути необхідними для керування новими реєстраціями на форумі. Містить до чотирьох
        розділів, які видні залежно від настроювань форуму. Серед них:<br /><br />
        <ul>
                <li>
                        <b>Реєстрація нового користувача</b><br />
                        Тут Ви можете вибрати реєстрацію нового користувача. Це може бути корисно на тих форумах, де реєстрація закрита
                        для нових користувачів, або у випадках, коли адміністратор хоче створити тестовий обліковий запис. Якщо обрано опцію "вимагати активацію облікового запису",
                        користувачеві буде відправлений email з посиланням для активації, по якому він повинен буде перейти, перш ніж зможе використати обліковий запис. Так само Ви можете
                        використати відправлення нового пароля на задані email адреси;<br /><br />
                </li>
                <li>
                        <b>Редагувати Реєстраційну Угоду</b><br />
                        Це дозволяє Вам задати текст для реєстраційної угоди, яка відображається при реєстрації на форумі;
                        <br /><br />
                </li>
                <li>
                        <b>Встановлення зарезервованих імен</b><br />
                        Використовуючи цей інтерфейс, Ви можете вказати слова або імена, які не можна буде використати в імені користувачів;<br /><br />
                </li>
                <li>
                        <b>Настроювання</b><br />
                        Цей розділ буде видний, тільки якщо у Вас є дозвіл адмініструвати форум. Тут Ви можете вибрати метод реєстрації,
                        використований на Вашому форумі, а так само інші настроювання стосовні до реєстрації.
                </li>
        </ul>';

$helptxt['modlog'] = '<b>Лог Модерування</b><br />
        Цей розділ дозволяє користувачам групи адміністратор відслідковувати всі дії по модеруванню, які зробили модератори форуму. Щоб бути впевненим, що
        модератори не видалять посилання на зроблені ними дії, можна встановити заборону на видалення цих даних на протязі 24-х годин після початої дії.
        Стовпчик \'Дія\' відображає зроблену модератором дію.';
$helptxt['adminlog'] = '<strong>Administration Log</strong><br />
	This section allows members of the admin team to track some of the administrative actions that have occurred on the forum. To ensure that
	admins cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.';
$helptxt['warning_enable'] = '<b>User Warning System</b><br />
	This feature enables members of the admin and moderation team to issue warnings to users - and to use a users warning level to determine the
	actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define
	which groups may assign warnings to users. Warning levels can be adjusted from a users profile. The following additional options are available:
	<ul>
		<li>
			<b>Warning Level for User Watch</b><br />
			This setting defines the percentage warning level a user must reach to automatically assign a &quot;watch&quot; to the user.
			Any user who is being &quot;watched&quot; will appear in the relevant area of the moderation center.
		</li>
		<li>
			<b>Warning Level for Post Moderation</b><br />
			Any user passing the value of this setting will find all their posts require moderator approval before they appear to the forum
			community. This will override any local board permissions which may exist related to post moderation.
		</li>
		<li>
			<b>Warning Level for User Muting</b><br />
			If this warning level is passed by a user they will find themselves under a post ban. The user will lose all posting rights.
		</li>
		<li>
			<b>Maximum User Warning Point per Day</b><br />
			This setting limits the amount of points a moderator may add/remove to any particular user in a twenty four hour period. This will
			can be used to limit what a moderator can do in a small period of time. This setting can be disabled by setting to a value of zero. Note that
			any users with administrator permissions are not affected by this value.
		</li>
	</ul>';
$helptxt['error_log'] = '<b>Лог Помилок</b><br />
        Лог помилок відображає кожну помилку, з якого зіштовхнулися користувачі при використанні форуму. Помилки сортуються по даті, можна вибрати сортування,
        клікнувши по чорній стрілці, навпроти кожної дати. На додаток, Ви можете відфільтрувати помилки, клікнувши по зображенню поруч із кожною помилкою. Це
        дозволяє Вам фільтрувати, наприклад, по користувачам. Коли фільтр включений будуть показані тільки ті результати, які відповідають даному фільтру.';
$helptxt['theme_settings'] = '<b>Настроювання Тем</b><br />
        Цей розділ настроювань, дозволяє Вам змінювати настроювання, які виставляються до теми оформлення. Ці настроювання включають такі параметри, як директорія тем і URL, а
        також параметри, які впливають на розміщення теми на Вашому форумі. Більшість тем будуть мати різні параметри, створені користувачем, що дозволяють адаптувати тему
        відповідно до Ваших індивідуальних переваг на форумі.';
$helptxt['smileys'] = '<b>Центр Смайлів</b><br />
        Тут Ви можете додавати, видаляти смайли, або набори смайлів. Якщо смайл один у наборі, то він з\'являється у всіх наборах - інакше, він може
        збентежити Ваших користувачів, які використають різні набори.<br /><br />

        Ви так само можете відредагувати іконки повідомлень, якщо вони включені на сторінці настроювань.';
$helptxt['calendar'] = '<b>Керування Календарем</b><br />
        Тут Ви можете змінити поточні настроювання календаря, а так само додати або видалити свята, які з\'являються в календарі.';

$helptxt['serversettings'] = '<b>Налаштування Сервера</b><br />
	Тут Ви можете змінювати основні налаштування Вашого форуму. Цей розділ містить у собі налаштування бази даних й адреси(url), також налаштування відсилання повідомлень і кешування. Перш ніж змінювати дані налаштування подумайте, тому що невірне налаштування може привести форум у неробочий стан';
$helptxt['manage_files'] = '
	<ul>
		<li>
			<b>Browse Files</b><br />
			Browse through all the attachments, avatars and thumbnails stored by SMF.<br /><br />
		</li><li>
			<b>Attachment Settings</b><br />
			Configure where attachments are stored and set restrictions on the types of attachments.<br /><br />
		</li><li>
			<b>Avatar Settings</b><br />
			Configure where avarars are stored and manage resizing of avatars.<br /><br />
		</li><li>
			<b>File Maintenance</b><br />
			Check and repair any error in the attachment directory and delete selected attachments.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Це дозволяє Вам встановлювати число попередніх повідомлень, відображуваних під коротким зведенням теми у вікні відповіді.';
$helptxt['enableAllMessages'] = 'Встановіть тут <em>максимальне</em> число повідомлень у темі, які будуть показані по посиланню &quot;всі&quot;.';
$helptxt['enableStickyTopics'] = 'Прикріплені теми - теми, які будуть залишатися нагорі розділу. Вони звичайно використовуються для важливих
                повідомлень. Незважаючи на те, що Ви можете змінити це за допомогою прав доступу, за замовчуванням тільки модератори і адміністратори можуть зробити тему прикріпленою.';
$helptxt['allow_guestAccess'] = 'Забравши тут галочку, Ви забороните гостям робити що-небудь, крім базових функцій на Вашому форумі - вхід, реєстрація, нагадування пароля і ін. Це не теж саме, що заборона доступу гостям до форумів.';
$helptxt['userLanguage'] = 'Включення цього параметра дозволить користувачам вибирати, який мовний файл вони будуть використовувати. Це не вплине на вибір
                за замовчуванням.';
$helptxt['trackStats'] = 'Статистика:<br />Це дозволить користувачам бачити останні повідомлення і найбільш популярні теми на Вашому форумі.
                Так само це показує деяку статистику, таку як найбільша кількість користувачів online, нові користувачі і нові теми.<hr />
                Перегляди сторінки:<br />Додаєть ще колонка в сторінку статистики, на якій показується число переглядів сторінок Ваших форумів.';
$helptxt['titlesEnable'] = 'Включення підпису під аватарою, дозволить користувачам з відповідними правами створювати спеціальні назви для себе.
                Це буде показано під ім\'ям.<br /><i>Наприклад:</i><br />Dutch i Smart<br />Класні хлопці';
$helptxt['topbottomEnable'] = 'Додаються кнопки перейти нагору і перейти вниз, що дозволить користувачеві переходити нагору і вниз сторінки
                без необхідності використовувати скролінг.';
$helptxt['onlineEnable'] = 'Відображати картинку, яка показує чи перебуває користувач в online або offline';
$helptxt['todayMod'] = 'Показувати &quot;Сьогодні&quot; або &quot;Завтра&quot;, замість дати.';
$helptxt['disableCustomPerPage'] = 'Check this option to stop users from customizing the amount of messages and topics to display per page on the Message Index and Topic Display page respectively.';
$helptxt['enablePreviousNext'] = 'Показувати посилання на наступну і попередню тему.';
$helptxt['pollMode'] = 'Показувати включені голосування чи ні. Якщо голосування відключені, всі існуючі голосування будуть вилучені
                з тем. Ви можете вибрати продовжити показувати звичайну тему без голосувань, вибравши
                &quot;Показувати існуючі голосування, як теми&quot;.<br /><br />';
$helptxt['enableVBStyleLogin'] = 'Показувати більш стислу форму для входу на кожній сторінці форуму для гостей.';
$helptxt['enableCompressedOutput'] = 'Цей параметр буде компресувати сторінки, при передачі даних із сервера на компьютер користувача для зниження завантаження каналу, але для цього необхідно, щоб був
                встановлений zlib.';
$helptxt['disableTemplateEval'] = 'By default, templates are evaluated instead of just included. This helps with showing more useful debug information in case a template contains an error.<br /><br />
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';
$helptxt['databaseSession_enable'] = 'Використання бази даних для зберігання сесій - це краще для серверів зі збалансованим навантаженням, тому що усуває всі помилки із таймаутами і може зробити роботу Вашого форуму швидшим.';
$helptxt['databaseSession_loose'] = 'Зменщення завантаження каналу, який викоистовує Ваш форум, і зробить так, що, клікнувши [назад], сторінка не буде перезавантажуватися, а буде використовуватися інформація закешована браузером - недолік в тому, що інформація не буде оновлена.';
$helptxt['databaseSession_lifetime'] = 'Тривалість сесії (у секундах) після останньої активності. Рекомендоване значення - більше 2400.';
$helptxt['enableErrorLogging'] = 'Вести лог будь-яких помилок, таких як неправильний вхід, так що Ви зможете переглянути, що відбувалося неправильно.';
$helptxt['enableErrorQueryLogging'] = 'This will include the full query sent to the database in the error log.  Requires error logging to be turned on.<br /><br /><strong>Note:  This will affect the ability to filter the error log by the error message.</strong>';
$helptxt['allow_disableAnnounce'] = 'Це дозволить користувачам не одержувати повідомлення про теми.';
$helptxt['disallow_sendBody'] = 'Це настроювання унеможливлює одержувати текст відповідей і повідомлень у листах повідомлень.<br /><br />Часто користувачі можуть відповідати на листи повідомлень, що в більшості випадків означає, що відповідь одержує webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Компактний зміст сторінок.<br /><i>Приклад:</i>
                &quot;3&quot; показується як: 1...4 [5] 6...9 <br />
                &quot;5&quot; показується як: 1...3 4 [5] 6 7...9';
$helptxt['timeLoadPageEnable'] = 'Це буде показуватися внизу форуму, час у секундах, який знадобилося для генерації сторінки Вашого форуму.';
$helptxt['removeNestedQuotes'] = 'Видалення вкладених цитат.';
$helptxt['simpleSearch'] = 'Буде показуватися проста пошукова форма і посилання на форму розширеного пошуку.';
$helptxt['max_image_width'] = 'Це дозволяє Вам задати максимальний розмір для зображень.';
$helptxt['mail_type'] = 'Це настроювання дозволяє Вам вибрати встановлення PHP mail за замовчуванням, або задати свої параметри для SMTP серверу. PHP не підтримує SMTP аутентификацию, тому якщо Вам це потрібно, виберіть SMTP.  Запам\'ятаєте, що SMTP може виявитися повільніше, і деякі сервера не будуть приймати ім\'я користувача і пароль.<br /><br />Вам не прийдеться заповнювати параметри SMTP сервера, якщо Ви встановили тут параметри PHP mail за замовчуванням.';
$helptxt['attachment_manager_settings'] = 'Attachments are files that members can upload, and attach to a post.<br /><br />
		<strong>Check attachment extension</strong>:<br /> Do you want to check the extension of the files?<br />
		<strong>Allowed attachment extensions</strong>:<br /> You can set the allowed extensions of attached files.<br />
		<strong>Attachments directory</strong>:<br /> The path to your attachment folder<br />(example: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Max attachment folder space</strong> (in KB):<br /> Select how large the attachment folder can be, including all files within it.<br />
		<strong>Max attachment size per post</strong> (in KB):<br /> Select the maximum filesize of all attachments made per post.  If this is lower than the per-attachment limit, this will be the limit.<br />
		<strong>Max size per attachment</strong> (in KB):<br /> Select the maximum filesize of each separate attachment.<br />
		<strong>Max number of attachments per post</strong>:<br /> Select the number of attachments a person can make, per post.<br />
		<strong>Display attachment as picture in posts</strong>:<br /> If the uploaded file is a picture, this will show it underneath the post.<br />
		<strong>Resize images when showing under posts</strong>:<br /> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br />
		<strong>Maximum width and height of thumbnails</strong>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width and height to resize attachments down from.  They will be resized proportionally.';
$helptxt['attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';
$helptxt['attachment_image_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded image attachments. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded avatars. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['karmaMode'] = 'Карма - функція, яка показує популярність користувача. Якщо дозволено, користувачі можуть
                \'підвищувати\' або \'знижувати\' карму інших користувачів, за рахунок чого підраховується їхня популярність. Ви можете змінити
                кількість повідомлень, необхідних для зміни &quot;карми&quot;, час між змінами і т.д.<br /><br /> Якщо у Вас виникають проблеми з роботою цієї функції, перевірте права доступу.';
$helptxt['cal_enabled'] = 'Календар може бути використаний для відображення днів народжень, або для відображень важливих моментів, які відбуваються у Вашому співтоваристві.<br /><br />
                <b>Показувати дні, як посилання на \'Додати подію\'</b>:<br />Це дозволить користувачам додавати події в той день, коли вони клікнуть по цій даті<br />
                <b>Показувати номера тижднів</b>:<br />Показувати який зараз тиждень.<br />
                <b>Максимально днів в анонсі на головній сторінці форуму</b>:<br />Якщо встановлено 7, будуть показані кращі з подій наступного тижня.<br />
                <b>Показувати свята на головній сторінці форуму</b>:<br />Показувати сьогоднішні свята в блоці календар на головній сторінці форуму.<br />
                <b>Показувати дні народження на головній сторінці форуму</b>:<br />Показувати сьогоднішні дні народження в блоці календар на головній сторінці форуму.<br />
                <b>Показувати події на головній сторінці форуму</b>:<br />Показувати сьогоднішні події в блоці календар на головній сторінці форуму.<br />
                <b>Форум за замовчуванням для розміщення повідомлень</b>:<br />У якому форумі за замовчуванням розміщувати події?<br />
                <b>Дозволяти події без посилання на повідомлення</b>:<br />Дозволити користувачам розміщати події без необхідності створення посилання на них.<br />
                <b>Перший рік</b>:<br />Виберіть &quot;перший&quot; рік у списку календаря.<br />
                <b>Останній рік</b>:<br />Виберіть &quot;останній&quot; рік у списку календаря.<br />
                <b>Кольори дня народження</b>:<br />Виберіть кольори для тексту дня народження.<br />
                <b>Кольори події</b>:<br />Виберіть кольори для тексту події.<br />
                <b>Кольори свята</b>:<br />Виберіть кольори тексту для свята.<br />
                <b>Дозволити займати подіям кілька днів</b>:<br />Відзначте, можна дозволити подіям розподілятися на кілька днів<br />
                <b>Максимальна кількість днів, які подія може займати</b>:<br />Виберіть максимальну кількість днів, які подія може займати.<br /><br />
                Пам\'ятайте, що використання календаря (розміщення, перегляд подій та ін.) керується правами доступу.';
$helptxt['localCookies'] = 'SMF використає cookies, щоб зберігати інформацію про обліковий запис на комп\'ютері клієнта.
        Кукі можуть зберігатися глобально (myserver.com) або локально (myserver.com/шлях/до/форуму).<br />
        Відзначте цю опцію, якщо Ви маєте проблеми з користувачами, які автоматично виходять.<hr />';
$helptxt['enableBBC'] = 'Включення цієї опції дозволить користувачам використати BBC код на форумі, що дозволить їм вставляти зображення, форматувати текст і багато чого іншого.';
$helptxt['time_offset'] = 'Не всі адміністратори хочуть, щоб форум використав той самий час, який використається на сервері. Використовуючи цю функцію, Ви можете вказати різницю в часі (у годинах).';
$helptxt['default_timezone'] = 'The server timezone tells PHP where your server is located. You should ensure this is set correctly, preferably to the country/city in which the city is located. You can find out more information on the <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP Site</a>.';
$helptxt['spamWaitTime'] = 'Тут Ви можете вказати час, який необхідно зачекати для відправлення наступного повідомлення. Це може запобігти спам, флуд або оффтопік на Вашому форумі.';

$helptxt['enablePostHTML'] = 'Це дозволить використати HTML теги в повідомленнях користувачів:
        <ul style="margin-bottom: 0;">
                <li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
                <li>&lt;a href=&quot;&quot;&gt;</li>
                <li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
                <li>&lt;br /&gt;, &lt;hr /&gt;</li>
                <li>&lt;pre&gt;, &lt;blockquote&gt;</li>
        </ul>';

$helptxt['themes'] = 'Тут Ви можете вибрати тему оформлення, яка буде використатовуватись за замовчуванням.
        Натисніть на тему, щоб змінити її настроювання.';
$helptxt['theme_install'] = 'Тут Ви можете встановити нову тему оформлення. Ви можете встановити її з вже існуючої директорії на сервері, завантажити з сайту, або скопіювати вже існуючу тему і внести в неї зміни.<br /><br />Архів з темою або директорія повинні мати файл <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Ця функція дозволить користувачам вбудовувати Flash-файли у свої повідомлення.
        Використовуєте на свій страх і ризик!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Дозволити користувачам посилатися на <a href="%s?action=.xml;sa=news">Останні новини</a>.
        Рекомендується обмежити розмір повідомлень/новин, для правильного відображення rss новин у різних клієнтах.';
$helptxt['hotTopicPosts'] = 'Кількість повідомлень, після яких тема вважається &quot;популярною&quot; і
        &quot;дуже популярною&quot;.';
$helptxt['globalCookies'] = 'Використання кроссдоменних cookies. Наприклад, якщо...<br />
        Ваш сайт розташований за адресою http://www.simplemachines.org/,<br />
        А Ваш форум http://forum.simplemachines.org/,<br />
        Використовуючи цю функцію, користувачі можуть заходити на Ваш сайт використовуючи кроссдоменні cookies Вашого форуму. Не використайте цю функцію, якщо використаються якісь інші домены (Наприклад, hacker.simplemachines.org), які не належать Вам.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'Це <i>відключить</i> перевірку пароля при вході в Адміністративну панель. Не рекомендується відключати цю функцію!';
$helptxt['securityDisable_why'] = 'Ваш поточний пароль.';
$helptxt['emailmembers'] = 'У цьому повідомленні, Ви можете використати наступні &quot;змінні&quot;:<br />
        {$board_url} - URL адреса Вашого форуму<br />
        {$current_time} - Поточний час<br />
        {$member.email} - Email користувача<br />
        {$member.link} - Посилання користувача<br />
        {$member.id} - ID користувача<br />
        {$member.name} - Ім\'я користувача.<br />
        {$latest_member.link} - Посилання останніх користувачів<br />
        {$latest_member.id} - ID останніх користувачів<br />
        {$latest_member.name} - Імена останніх користувачів.';
$helptxt['attachmentEncryptFilenames'] = 'Кодування імен файлів вкладень, дозволяє прикріплювати до повідомлень файли з однаковими іменами.';

$helptxt['failed_login_threshold'] = 'Встановіть кількість невдалих спроб входу, після чого відбудеться перенапрямок на відновлення пароля.';
$helptxt['oldTopicDays'] = 'Якщо ця функція включена, форум сповістить користувача про те, що тема вже застаріла і запропонує почати нову тему, якщо він буде намагатися відповісти в ній.';
$helptxt['edit_wait_time'] = 'Кількість секунд, на протязі яких користувач зможе відредагувати послання.';
$helptxt['edit_disable_time'] = 'Кількість хвилин, на протязі яких, користувач зможе відредагувати своє повідомлення. 0 - відключити. <br /><br /><i>Нагадування: Якщо в користувача є право редагувати будь-які повідомлення, ця функція на нього не поширюється</i>';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = 'Включити перевірку орфографії. У Вас повинна бути встановлена pspell бібліотека. Ваш сервер ' . (function_exists('pspell_new') ? 'підтримує' : 'не підтримує') . ' цю функцію.';
$helptxt['disable_wysiwyg'] = 'This setting disallows all users from using the WYSIWYG (&quot;What You See Is What You Get&quot;) editor on the post page.';
$helptxt['lastActive'] = 'Кількість хвилин, на протязі яких користувач буде вважатися в online. За замовчуванням 15 хвилин.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section:
	<ul>
		<li><b>Default Option:</b> Whichever option box has the &quot;radio button&quot; next to it selected will be the default selection for the user when they enter their profile.</li>
		<li><b>Removing Options:</b> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li>
		<li><b>Reordering Options:</b> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <b>not</b> change the text when reordering options as otherwise user data will be lost.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Ця функція оптимізує таблиці бази даних, через кожні кілька днів. Поставте 1 для щоденної оптимізації. Ви також можете вказати максимальну кількість користувачів online, щоб не перевантажити сервер.';
$helptxt['autoFixDatabase'] = 'Ця функція автоматично виправить помилки в таблицях бази. Після відпрацьовування даної функції, Ви одержите листа з повідомленням.';

$helptxt['enableParticipation'] = 'Відображення невеликої іконки для створеної теми.';

$helptxt['db_persist'] = 'Залишати з\'єднання активним для поліпшення продуктивності форуму. Якщо Ви не використовуєте віддалений сервер, із цією функцією можуть виникнути проблеми.';
$helptxt['ssi_db_user'] = 'Optional setting to use a different database user and password when you are using SSI.php.';

$helptxt['queryless_urls'] = 'Ця функція міняє формат URL адреси для більш ретельного індексування пошуковими серверами, після чого вони виглядають приблизно так: index.php/topic,1.html.<br /><br />Ця функція ' . (strpos(php_sapi_name(), 'apache') !== false ? '' : 'не') . ' працює на Вашому сервер.';
$helptxt['countChildPosts'] = 'Включення цієї функції означає, що повідомлення розташовані в підрозділах батьківського розділу будуть підраховувати статистику форуму.';
$helptxt['fixLongWords'] = 'Ця функція розділяє слова на частини, якщо кількість символів перевищує дозволену довжину.';
$helptxt['allow_ignore_boards'] = 'Checking this option will allow users to select boards they wish to ignore.';

$helptxt['who_enabled'] = 'Ця опція дозволяє переглядати користувачам хто в цей момент перебуває на форумі і, що він робить.';

$helptxt['recycle_enable'] = '&quot;Відновлення&quot; вилучених тем і повідомлень зі спеціального розділу.';

$helptxt['enableReportPM'] = 'Ця опція дозволяє користувачам робити рапорт про особисті повідомлення адміністрації форуму.';
$helptxt['max_pm_recipients'] = 'Ця опція дозволяє Вам установити максимальну кількість одержувачів дозволених у відсиланні особистих повідомлень користувачем форуму. Це може використатися як запобігання використання системи особистих повідомлень для розсилання спама. Зверніть увагу що користувачі яким дозволене робити оголошення не підпорядковуються цьому обмеженню. Без обмежень - встановіть 0.';
$helptxt['pm_posts_verification'] = 'Ця опція змусить користувачів вводити показаний на зображенні щоразу при відправленні приватного повідомлення. Тільки користувачі із поштовою адресою нижче номера повинні будуть вводити код - це повинно забезпечити захист від спам-роботів.';
$helptxt['pm_posts_per_hour'] = 'This will limit the number of personal messages which may be sent by a user in a one hour period. This does not affect admins or moderators.';

$helptxt['default_personal_text'] = 'Sets the default text a user will have as their &quot;personal text.&quot;';

$helptxt['modlog_enabled'] = 'Логування всіх модераторських дій.';

$helptxt['guest_hideContacts'] = 'Ця функція приховує від гостей форуму email користувачів і їхніх контактів клієнтів швидкого обміну повідомленнями.';

$helptxt['registration_method'] = 'Ця опція визначає метод реєстрації на Вашому форумі. Доступні наступні методи:<br /><br />
        <ul>
                <li>
                        <b>Реєстрація заборонена</b><br />
                                Означає, що ніхто не може реєструватися на форумі;<br />
                </li><li>
                        <b>Миттєва реєстрація</b><br />
                                Нові користувачі можуть відразу ввійти на форум і залишати повідомлення, відразу після реєстрації;<br />
                </li><li>
                        <b>Активація користувача</b><br />
                                Означає, що користувач повинен активувати свій обліковий запис, шляхом переходу по посиланню, присланого на email;<br />
                </li><li>
                        <b>Підтвердження користувача</b><br />
                                Означає, що адміністратор форуму повинен підтвердити обліковий запис, перш ніж користувач буде мати доступ до основних функцій форуму.
                </li>
        </ul>';
$helptxt['register_openid'] = '<strong>Authenticate with OpenID</strong><br />
	OpenID is a means of using one username across different websites, to simplify the online experience. To use OpenID you first need to create an OpenID account - a list of providers can be found on the <a href="http://openid.net/" target="_blank">OpenID Official Site</a><br /><br />
	Once you have an OpenID account simply enter your unique identification URL into the OpenID input box and submit. You will then be taken to your providers site to verify your identity before being passed back to this site.<br /><br />
	On your first visit to this site you will be asked to confirm a couple of details before you will be recognized, after which you can login to this site and change your profile settings using just your OpenID.<br /><br />
	For more information please visit the <a href="http://openid.net/" target="_blank">OpenID Official Site</a>';

$helptxt['send_validation_onChange'] = 'Ця функція означає те, що після зміни користувачем його email адреси, на нову адресу відправляється лист, за допомогою якого, користувач повинен реактивировать свій обліковий запис.';
$helptxt['send_welcomeEmail'] = 'При включенні цієї функції, користувачі, які пройшли реєстрацію, будуть одержувати листа із запрошенням з форуму.';
$helptxt['password_strength'] = 'Ця функція визначає політику паролів користувачів.
        Доступні наступні варіанти:
        <ul>
                <li><b>Низький:</b> Пароль повинен містити, як мінімум 4 символи;</li>
                <li><b>Середній:</b> Пароль повинен містити, як мінімум 8 символів і не може збігатися з ім\'ям або email адресою;</li>
                <li><b>Високий:</b> Пароль повинен містити символи верхнього і нижнього регістрів і як мінімум з одне число.</li>
        </ul>';

$helptxt['coppaAge'] = 'Значення в цьому полі визначає мінімальний вік користувача на форумі.
        Під час реєстрації, користувачеві буде запропоновано підтвердити його вік і якщо він підходить під певне правило, користувач зможе продовжити реєстрацію.
        Якщо значення дорівнює нулю, вік ураховуватися не буде.';
$helptxt['coppaType'] = 'Якщо на форумі присутній облік віку і вік користувача менший, ніж зазначено в настроюваннях реєстрації, існують дві подальших дії, а саме:
        <ul>
                <li>
                        <b>Скасувати реєстрацію</b><br />
                                Подальша реєстрація користувача неможлива;<br />
                </li><li>
                        <b>Запросити підтвердження в батьків/опікуна</b><br />
                                Буде відправлений лист батькам/опікунам користувача.
                </li>
        </ul>';
$helptxt['coppaPost'] = 'Введіть у це поле email адресу, куди батьки/опікуни зможуть відправити підтвердження про дозвіл на реєстрацію.';

$helptxt['allow_hideOnline'] = 'Ця функція дозволяє приховувати online статус користувача на форумі (крім адміністраторів).';
$helptxt['make_email_viewable'] = 'If this option is enabled instead of users email addresses being hidden to normal members and guests they will be publicly viewable on the forum. Enabling this will put your users at greater risk of being victims of spam as a result of email harvesters visiting your forum. Note this setting does not override the user setting for hiding their email address from users. Enabling this setting is <strong>not</strong> recommended.';
$helptxt['meta_keywords'] = 'These keywords are sent in the output of every page to indicate to search engines (etc) the key content of your site. They should be a comma separated list of words, and should not use HTML.';

$helptxt['latest_support'] = 'Тут відображаються деякі проблеми або питання з конфігурацією Вашого сервера. Не хвилюйтеся, ця інформація нікуди не записується і нікому не надається.<br /><br />Якщо Ви бачите незмінний напис &quot;Одержання інформації про підтримку...&quot;, це означає, що форум не може підключиться до сервера <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Тут відображаються самі популярні і вибіркові пакети модифікацій.<br /><br />Якщо пакети не відображаються, форум не може підключитися до сервера <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Тут відображаються останні і самі популярні теми оформлення із сайту <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  Якщо теми не відображаються, форум не може підключитися до сервера <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'З метою безпеки, відповідь на секретне питання (так само як і пароль) зберігається в зашифрованому виді.';
$helptxt['moderator_why_missing'] = 'Ви можете призначити модераторів за допомогою <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">інтерфейсу керування розділами</a>.';

$helptxt['permissions'] = 'Права доступу обмежують або дозволяють користувачам або групі користувачів користуватися певними функціями на форумі.';
$helptxt['permissions_board'] = 'Якщо розділ виставлений, як \'Глобальний,\' це означає, що в ньому не визначені які-небудь свої власні права доступу.  \'Локальний\' розділ використає свої власні права доступу, які відрізняються від Глобальних прав доступу. Це дозволяє Вам мати розділ, який буде мати свої власні права доступу, які будуть відрізнятися від інших прав інших розділів.';
$helptxt['permissions_quickgroups'] = 'Це дозволяє Вам використати вже передвстановленніе права користувачів. Наприклад, \'стандартний\', \'обмежений\', із правами модератора \'модератор\', і із правами на профілактику \'технічний\'.';
$helptxt['permissions_deny'] = 'Ця функція дозволяє використати заборонні права для користувачів.';
$helptxt['permissions_postgroups'] = 'Ця функція дозволяє виставити певні права для груп користувачів, заснованих на кількості повідомлень.';
$helptxt['membergroup_guests'] = 'У групі користувачів Гості - це не зареєстровані або користувачі, які ще не увійшли на Ваш форум.';
$helptxt['membergroup_regular_members'] = 'Звичайні користувачі - це всі користувачі, які увійшли на форум, але не входять у жодну з певних груп користувачів.';
$helptxt['membergroup_administrator'] = 'Адміністратор має доступ до будь-якої функції форуму. Змінити права доступу адміністраторові не можлива.';
$helptxt['membergroup_moderator'] = 'У групу Модератор, входять користувачі, які призначені модераторами в певному розділі.';
$helptxt['membergroups'] = 'Існує два види груп користувачів:
        <ul>
                <li><b>Постійна група:</b> У постійну групу, користувачі автоматично не заносяться. Для того, щоб помістити користувача в таку групу, адміністратор форуму повинен встановити необхідну групу в профілі користувача;</li>
                <li><b>Група заснована на повідомленнях:</b> У відмінності від постійної групи, група заснована на повідомленнях не може бути привласнена адміністратором користувачеві. Користувачі автоматично переходять із групи в групу, набираючи необхідну кількість повідомлень</li>
        </ul>';

$helptxt['calendar_how_edit'] = 'Ви можете редагувати події, шляхом натискання на червону зірочку (*).';

$helptxt['maintenance_backup'] = 'У цій області Ви можете створити резервну копію Вашої Бази Даних.<br /><br />Рекомендується періодично виконувати цю дію.';
$helptxt['maintenance_rot'] = 'Тут Ви можете <b>остаточно</b> і <b>безповоротно</b> видалити старі теми. Рекомендується спочатку зробити резервну копію Бази Даних, а потім видаляти старі теми.<br /><br />Використовуйте обережно.';
$helptxt['maintenance_members'] = 'This allows you to <strong>completely</strong> and <strong>irrevocably</strong> remove member accounts from your forum.  It is <strong>highly</strong> recommended that you try to make a backup first, just in case you remove something you didn\'t mean to.<br /><br />Use this option with care.';

$helptxt['avatar_server_stored'] = 'This allows your members to pick from avatars stored on your server itself.  They are, generally, in the same place as SMF under the avatars folder.<br />As a tip, if you create directories in that folder, you can make &quot;categories&quot; of avatars.';
$helptxt['avatar_external'] = 'With this enabled, your members can type in a URL to their own avatar.  The downside of this is that, in some cases, they may use avatars that are overly large or portray images you don\'t want on your forum.';
$helptxt['avatar_download_external'] = 'Ця функція дозволяє скачувати аватари із зазначених URL адрес.';
$helptxt['avatar_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'Формат PNG як правило займає більше місця, але зображення є якіснішим. Якщо функція виключена, буде використовуватися формат JPEG (розмір файлів менший, але і якість нижче).';

$helptxt['disableHostnameLookup'] = 'Це відключить запит імен хоста користувача. На деяких серверах ця функція працює повільно. Не забувайте, що функція Бана може стати менш ефективної, тому що Ви могли поставити Бан саме на ім\'я хоста.';

$helptxt['search_weight_frequency'] = 'Тут Ви можете виставити релевантність пошуку.<br /><br />При виставлянні Відносна ширина пошуку по кількості повідомлень у темі, Ви визначаєте відсоток відсівування повідомлень, максимум з яких будуть становити теми, у яких є максимальна кількість відповідей, які містять слово або фразу які шукаються.';
$helptxt['search_weight_age'] = 'При виставлянні Відносна ширина пошуку за віком останніх повідомлень, Ви визначаєте відсоток відсівування повідомлень, першими з яких будуть становити теми, з останніми за часом повідомленнями, у яких є шукане слово або фраза.';
$helptxt['search_weight_length'] = 'При виставлянні Відносна ширина пошуку по величині теми, Ви визначаєте відсоток відсівування повідомлень, першими з яких будуть становити теми, з максимальною кількістю повідомлень, у яких є шукане слово або фраза.';
$helptxt['search_weight_subject'] = 'При виставлянні Відносна ширина пошуку за назвою теми повідомлень, Ви визначаєте відсоток відсівування повідомлень, першими з яких будуть становити теми, у назві яких буде втримуватися шукане слово або фраза.';
$helptxt['search_weight_first_message'] = 'При виставлянні Відносна ширина пошуку по перших повідомленнях, що втримуються, Ви визначаєте відсоток відсівування повідомлень, першими з яких будуть становити теми, у перших повідомленнях яких, буде втримуватися шукане слово або фраза.';
$helptxt['search_weight_sticky'] = 'Параметри релевантності використовуються для того щоб визначити доречність результатів пошуку. Змініть параметри релевантності щоб результати пошуку відповідали важливим речам для Вашого форуму. Наприклад, новини форуму можуть мати високу важливість для релевантності за \'віком останнього повідомлення\'. Всі параметри відносно один одного повинні бути цілими додатніми числами.<br /><br /> Цей параметр стежить за прикріпленими темами й збільшує релевантність.';
$helptxt['search'] = 'Включення функції пошуку. Тут Ви просто включаєте цю функцію. Права визначаються в розділі \'Права користувачів\'.';
$helptxt['search_why_use_index'] = 'Індексування може набагато покращити роботу пошуку на Вашому форумі. Особливо, коли число повідомлень збільшується, пошук без індексування займає більше часу й збільшує навантаження на Вашу базу даних. Якщо Ваш форум містить більше 50.000 повідомлень, Ви можете створити індексування щоб зменшити навантаження на Ваш форум.<br /><br />Зверніть увагу, індексування може займати деяке місце. Повнотекстове індексування побудоване на MySQL індексуванні. Це відносно компактно (приблизно той же розмір що й таблиця з повідомленнями), але багато слів не індексується, і більшість запитів обробляються дуже повільно. Вибіркове індексування найчастіше займає більше місця (залежно від Ваших настроювань може доходити до 3-х кратного розміру таблиці з повідомленнями), але це набагато швидше, ніж повнотекстове і стабільніше.';

$helptxt['see_admin_ip'] = 'IP адреси показуються адміністраторам і модераторам. IP періодично міняються!!!<br /><br />Користувачі можуть бачити свої власні IP адреси.';
$helptxt['see_member_ip'] = 'Ваша IP адреса буде видною тільки Вам і модераторам. IP адреса періодично міняється!!!<br /><br />Ви не можете бачити IP адреси інших користувачів, а вони не можуть бачити Ваш.';
$helptxt['whytwoip'] = 'SMF uses various methods to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case SMF logs both addresses, and uses them both for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = '\'Не можна залишати повідомлення\' означає, що користувач може тільки переглядати форум і не може залишати в ньому свої відповіді або створювати нові теми.';

$helptxt['posts_and_topics'] = '
        <ul>
                <li>
                        <b>Настроювання відправлення повідомлень</b><br />
                        Зміна деяких настроювань, яка стосується відправлення повідомлень. Тут Ви можете включити перевірку орфографії.
                </li><li>
                        <b>BBС Код (Bulletin Board Code)</b><br />
                        Тут Ви можете вибрати, які теги можна використати користувачам.
                </li><li>
                        <b>Цензурування слів</b>
                        Для видалення з форуму нецензурних виражень, Ви можете використати цю функцію. Зазначені слова будуть переконвертовані в потрібні, так само зазначені Вами.
                </li><li>
                        <b>Настроювання тем</b>
                        Зміна настроювань тем. Кількість відображуваних тем на сторінку, включення або вимикання прикріплених тем, кількість повідомлень для визначення теми, як популярної або дуже популярної і т.д.
                </li>
        </ul>';
$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any &quot;deny&quot; deny permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called &quot;Spiders&quot; and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br />Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'This setting allows you to select whether spiders should be listed in the who\'s online list on the board index and &quot;Who\'s Online&quot; page. Options are:
	<ul class="normallist">
		<li>
			<strong>Not at All</strong><br />
			Spiders will simply appear as guests to all users.
		</li><li>
			<strong>Show Spider Quantity</strong><br />
			The Board Index will display the number of spiders currently visiting the forum.
		</li><li>
			<strong>Show Spider Names</strong><br />
			Each spider name will be revealed, so users can see how many of each spider is currently visiting the forum - this takes effect in both the Board Index and Who\'s Online page.
		</li><li>
			<strong>Show Spider Names - Admin Only</strong><br />
			As above except only Administrators can see spider status - to all other users spiders appear as guests.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Choose the index of the birthday email message to use.  A preview will be shown in the Email Subject and Email Body fields.<br /><strong>Note:</strong> Setting this option does not automatically enable birthday emails.  To enable birthday emails use the <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Scheduled Tasks</a> page and enable the birthday email task.';
$helptxt['pm_bcc'] = 'When sending a personal message you can choose to add a recipient as BCC or &quot;Blind Carbon Copy&quot;. BCC recipients do not have their identities revealed to other recipients of the message.';

$helptxt['move_topics_maintenance'] = 'This will allow you to move all the posts from one board to another board.';
$helptxt['maintain_reattribute_posts'] = 'You can use this function to attribute guest posts on your board to a registered member. This is useful if, for example, a user deleted their account and changed their mind and wished to have their old posts associated with their account.';
$helptxt['chmod_flags'] = 'You can manually set the permissions you wish to set the selected files to. To do this enter the chmod value as a numeric (octet) value. Note - these flags will have no effect on Microsoft Windows operating systems.';

$helptxt['postmod'] = 'This section allows members of the moderation team (with sufficient permissions) to approve any posts and topics before they are shown.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html.  This will allow you to add more instant message providers, images or an embed etc. For example:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Note that you can use the following variables:<br />
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - Url to images folder in the users current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - Url to the images folder in the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = 'The input mask is important for your forum\'s security. Validating the input from a user can help ensure that data is not used in a way you do not expect. We have provided some simple regular expressions as hints.<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		&quot;[A-Za-z]+&quot; - Match all upper and lower case alphabet characters.<br />
		&quot;[0-9]+&quot; - Match all numeric characters.<br />
		&quot;[A-Za-z0-9]{7}&quot; - Match all upper and lower case alphabet and numeric characters seven times.<br />
		&quot;[^0-9]?&quot; - Forbid any number from being matched.<br />
		&quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Only allow 3 or 6 character hexcodes.<br />
	</div><br /><br />
	Additionally, special metacharacters ?+*^$ and {xx} can be defined.
	<div class="smalltext" style="margin: 0 2em">
		? - None or one match of previous expression.<br />
		+ - One or more of previous expression.<br />
		* - None or more of previous expression.<br />
		{xx} - An exact number from previous expression.<br />
		{xx,} - An exact number or more from previous expression.<br />
		{,xx} - An exact number or less from previous expression.<br />
		{xx,yy} - An exact match between the two numbers from previous expression.<br />
		^ - Start of string.<br />
		$ - End of string.<br />
		\\ - Escapes the next character.<br />
	</div><br /><br />
	More information and advanced techniques may be found on the internet.';
$helptxt['image_proxy_enabled'] = 'Whether to enable the image proxy';
$helptxt['image_proxy_secret'] = 'Keep this a secret, protects your forum from hotlinking images. Change it in order to render current hotlinked images useless';
$helptxt['image_proxy_maxsize'] = 'Maximum image size that the image proxy will cache: bigger images will be not be cached. Cached images are stored in your SMF cache folder, so make sure you have enough free space.';

?>
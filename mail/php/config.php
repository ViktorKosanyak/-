<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// Имя
	const NAMEISREQUIRED = true;
	const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

	// Телефон
	const TELISREQUIRED = false;
	const MSGSTELERROR = "⚠ Поле обязательно для заполнения";

	// Текстовое поле
	const TEXTISREQUIRED = false;
	const MSGSTEXTERROR = "⚠ Поле обязательно для заполнения";

	// Сообщение об успешной отправке
	const MSGSSUCCESS = "Сообщение успешно отправлено";

	// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
		const HOST = 'ssl://smtp.mail.ru';
		const LOGIN = 'musola98@mail.ru';
		const PASS = 'parol123VBN-';
		const PORT = '465';

	// *** /SMTP *** //

  // Почта с которой будет приходить письмо
	const SENDER = 'musola98@mail.ru';
	
	// Почта на которую будет приходить письмо
	const CATCHER = 'dadaweak1@gmail.com';
	
	// Тема письма
	const SUBJECT = 'Заявка с сайта';
	
	// Кодировка
  const CHARSET = 'UTF-8';

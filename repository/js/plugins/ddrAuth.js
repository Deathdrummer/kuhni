$.fn.ddrAuth = function(o) {
	var selector = this,
		s = $.extend({
			onOpen: false,
			onAuth: false, // Выполнить функцию при авторизации
			onReg: false, // Вернуть объект {regRedirect: ...[редирект после регистрации], confirmRedirect: ...[редирект после подтверждения регистрации]}
			onReset: false,
			width: 400,
			winCls: false,
			confirmAccount: '[confirmaccount]',
			logout: '[logout]',
			logoutCallback: false,
			lang: {
				auth: 'Авторизация',
				resetPass: 'Сбросить пароль',
				reg: 'Регистрация',
				setReg:'Зарегистрироваться',
				resetingPass:'Сброс пароля',
				login: 'Войти',
				regText: 'На указанный Вами E-mail отправлено письмо со ссылкой на подтверждение аккаунта!',
				resetText: 'Ссылка на подтверждение сброса пароля была выслана на Вашу почту',
				error: 'Ошибка!',
				alreadyAuth: 'Вы уже авторизованы!',
				invalidOrExistantEmail: 'Ошибка! неверный или несуществующий email',
				invalidEmail: 'Ошибка! Неверный пароль',
				tryOver: 'Попытки входа исчерпаны!',
				accountBanned: 'Ваш аккаунт заблокирован!',
				close: 'Закрыть',
				alreadyReg: 'Ошибка! данный email уже зарегистрирован',
				errorAddingAccount: 'Ошибка добавления аккаунта!',
				errorConfirmRegMessage: '<p class="info">Ошибка отправки письма с подтверждением регистрации!</p> <p class="info">Пожалуйста, подтвердите регистрацию в личном кабинете, разделе "личные данные"!</p>',
				errorNoDataToEmail: 'Ошибка! Нетданных для отправки письма',
				errorSendingEmail: 'Ошибка отправления письма!',
				logoutQuestion: 'Вы действительно хотите выйти?',
				logout: 'Выйти',
				cancel: 'Отмена',
				systemError: 'Системная ошибка!',
				confirmAccount: 'Подтверждение аккаунта',
				confirmAccountSuccess: 'Аккаунт успешно подтвержден!',
				errorNoConfirmCode: 'Ошибка, не передан код подтверждения аккаунта!',
				errorConfirmLinkNoAddUp: 'Ошибка, ссылка на подтверждения аккаунта не сходится!',
				passResetSuccess: 'Пароль успешно сброшен!',
				errorNoRecoverCode: 'Ошибка, не передан код восстановления пароля!',
				errorResetPassNoAddUp: 'Ошибка, ссылка на сброс пароля не сходится!',
				authSuccess: 'Вы успешно авторизовались!'
			}
		}, o);
	
	$(selector).on(tapEvent, function() {
		var thisSel = this;
		ddrPopUp({
			title: s.lang.auth+'|3',
			width: s.width,
			buttons: [{id: 'reset', title: s.lang.resetPass, type: 'link'}, {id: 'reg', title: s.lang.reg}, {id: 'auth', title: s.lang.login}],
			close: false,
			closeByButton: false,
			contentToCenter: false,
			topClose: true,
			winClass: s.winCls,
		}, function(accountWin) {
			accountWin.setData('accounts/auth_form', function() {
				if (s.onOpen && typeof s.onOpen == 'function') s.onOpen(accountWin);
			});
			
			$('#auth').on(tapEvent, function() {
				$('#authForm').formSubmit({
					url: 'accounts/auth',
					beforeSend: function() {
						accountWin.wait();
					},
					success: function(code) {
						if (code == 1) {
							if (s.onAuth && typeof s.onAuth == 'function') s.onAuth(thisSel);
							else pageReload();
						} else if (code == 0) {
							notify(s.lang.error, 'error');
						} else if (code == -1) {
							notify(s.lang.alreadyAuth, 'error');
						} else if (code == -2) {
							$('#authForm').find('[name="email"]').errorLabel(s.lang.invalidOrExistantEmail);
						} else if (code == -3) {
							$('#authForm').find('[name="password"]').errorLabel(s.lang.invalidEmail);
						} else if (code == -4) {
							$('#authForm').find('[name="password"]').errorLabel(s.lang.invalidEmail);
							notify(s.lang.tryOver, 'info');
						} else if (code == -5) {
							accountWin.setData('<p class="error">'+s.lang.accountBanned+'</p>', false);
							accountWin.setButtons(false, s.lang.close);
						}
					},
					complete: function() {
						accountWin.wait(false);
					}
				});
			});
			
			
			
			$('#reg').on(tapEvent, function() {
				var email = $('#authForm').find('[name="email"]').val(),
					rg = getRegData(thisSel);
				accountWin.setData('accounts/reg_form', {email: email}, function() {
					if (s.onOpen) s.onOpen(accountWin);
				});
				accountWin.setButtons([{id: 'setReg', title: s.lang.setReg}]);
				accountWin.setTitle(s.lang.reg+'|3');
				
				$('#setReg').on(tapEvent, function() {
					$('#regForm').formSubmit({
						url: 'accounts/reg',
						fields: {redirect: (rg && rg['confirmRedirect'] ? rg['confirmRedirect'] : false)},
						before: function() {
							accountWin.wait();
						},
						success: function(code) {
							if (code == 1) {
								if (rg && rg['callback'] && typeof rg['callback'] == 'function') rg['callback']();
								if (rg && rg['regRedirect']) location.href = rg['regRedirect'];
								else pageReload();
							} else if (code == 0) {
								notify(s.lang.error, 'error');
							} else if (code == -1) {
								$('#regForm').find('[name="email"]').errorLabel(s.lang.alreadyReg);
							} else if (code == -2) {
								notify(s.lang.errorAddingAccount, 'error');
							} else if (code == -5) {
								accountWin.setData(s.lang.errorConfirmRegMessage, false);
							}
						},
						complete: function() {
							accountWin.wait(false);
						}
					});
				});
			});
			
			
			
			$('#reset').on(tapEvent, function() {
				var email = $('#authForm').find('[name="email"]').val();
				accountWin.setData('accounts/reset_form', {email: email});
				accountWin.setButtons([{id: 'setReset', title: s.lang.resetPass}]);
				accountWin.setTitle(s.lang.resetingPass+'|3');
				
				$('#setReset').on(tapEvent, function() {
					$('#resetForm').formSubmit({
						url: 'accounts/reset',
						beforeSend: function() {
							accountWin.wait();
						},
						success: function(code) {
							if (code == 1) {
								accountWin.setData('<p class="info">'+s.lang.resetText+'</p>', false);
								accountWin.removeButtons();
								if (s.onReset && typeof s.onReset == 'function') s.onReset(thisSel);
							} else if (code == 0) {
								notify(s.lang.error, 'error');
							} else if (code == -1) {
								$('#regForm').find('[name="email"]').errorLabel(s.lang.alreadyReg);
							} else if (code == -2) {
								notify(s.lang.errorNoDataToEmail, 'error');
							} else if (code == -3) {
								notify(s.lang.errorSendingEmail, 'error');
							}
						},
						complete: function() {
							accountWin.wait(false);
						}
					});
				});
			});
			
		});
	});
	
	
	
	
	function getRegData(thisSel) {
		return (s.onReg && typeof s.onReg == 'function') ? s.onReg(thisSel) : false;
	}
	
	
	$(s.logout).on(tapEvent, function() {
		ddrPopUp({
			title: 'Выход|5',
			html: '<p class="info">'+s.lang.logoutQuestion+'</p>',
			width: 400,
			buttons: [{id: 'logout', title: s.lang.logout}],
			close: s.lang.cancel
		}, function(logoutWin) {
			$('#logout').on(tapEvent, function() {
				logoutWin.wait();
				
				$.ajax({
					url: '/accounts/logout',
					method: 'POST',
					dataType: 'json',
					success: function(code) {
						if (code == 1) {
							if (s.logoutCallback && typeof s.logoutCallback == 'function') s.logoutCallback();
							pageReload();
						} else if (code == 0) {
							notify(s.lang.error, 'error');
						}
					},
					error: function(e) {
						notify(s.lang.systemError, 'error');
						showError(e);
					},
					complete: function() {
						logoutWin.wait(false);
					},
				});
			});
		});
	});
	
	
	
	//if (confirms.reset)
	
	
	//--------------------------------------------- Выслать ссылку для подтверждения аккаунта
	$('body').on(tapEvent, s.confirmAccount, function() {
		var rg = getRegData(),
			params = (rg && rg['regRedirect']) ? {redirect: rg['regRedirect']} : {};
		$.post('/accounts/set_email_to_confirm', params, function() {
			ddrPopUp({
				title: s.lang.confirmAccount+'|5',
				width: 500,
				html: '<p class="info">'+s.lang.regText+'</p>',
				close: s.lang.close,
				contentToCenter: true
			}, function(ddrwin) {
				
			});
		});
	});
	
	
	
	
	var confirmWaitReg = $('#confirmWaitReg').val() || null;
	if (confirmWaitReg == 1) {
		ddrPopUp({
			title: s.lang.confirmAccount+'|5',
			width: 500,
			html: '<p class="info">'+s.lang.regText+'</p>',
			buttons: false,
			disabledButtons: false,
			closeByButton: false,
			close: s.lang.close,
			contentToCenter: true,
			topClose: true,
			addClass: false,
		}, function(ddrwin) {
			
		});
	}
	
	
	var confirmReg = $('#confirmReg').val() || null;
	if (confirmReg == 1) {
		notify(s.lang.confirmAccountSuccess, 'success', 10);
	} else if (confirmReg == 0) {// - не передан код
		notify(s.lang.errorNoConfirmCode, 'error', 10);
	} else if (confirmReg == -1) {// - не сходится ссылка
		notify(s.lang.errorConfirmLinkNoAddUp, 'error', 10);
	} else if (confirmReg == -2) {// - не получилось сбросить пароль в БД
		notify(s.lang.errorConfirmLinkNoAddUp, 'error', 10);
	}
	
	
	var confirmReset = $('#confirmReset').val() || null;
	if (confirmReset == 1) {
		notify(s.lang.passResetSuccess, 'success', 10);
	} else if (confirmReset == 0) {// - не передан код
		notify(s.lang.errorNoRecoverCode, 'error', 10);
	} else if (confirmReset == -1) {// - не сходится ссылка
		notify(s.lang.errorResetPassNoAddUp, 'error', 10);
	} else if (confirmReset == -2) {// - не получилось сбросить пароль в БД
		notify(s.lang.errorResetPassNoAddUp, 'error', 10);
	}
	
	
	var confirmLogin = $('#confirmLogin').val() || null;
	if (confirmLogin) {
		notify(s.lang.authSuccess, 'success', 10);
	}
	
	
};
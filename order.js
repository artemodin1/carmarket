function dispatch()
		 {
			 var mail = window.prompt("Как только мы оформим заказ, сразу вышлем вам письмо с подробной информацией. Пожалуйста, введите свою почту:");
			 if (mail === '' || mail === null){ alert('Вы не ввели почту!');}
			 else {
			 alert('Спасибо за заказ!');}
		 }
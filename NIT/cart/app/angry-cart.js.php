
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>angry-cart.js</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/angry-cart.min.css">
</head>
<body>

	<div class="container">
		<div class="row">

			<!-- <div class="col s12">
				<img src="img/header.png" alt="">
			</div> -->
			<!-- /.col s12 -->

			<div class="col s12">
				<nav>
					<div class="nav-wrapper">
						<a href="#" class="brand-logo">Продукты Стахановец</a>
						<ul class="right hide-on-med-and-down">
							<li class="dropdown">
								<a href="#" id="showCart"><i class="material-icons">shopping_cart</i> <span id="cartCount" class="cart_count">0</span></a>

								<div id="dropdownCart" class="card card-dropdown">

									<div class="pl-10">
										<h6 class="d-block">Подитог:</h6>
										<h5 class="mt-0">₽<span id="totalPrice">0</span></h5>
									</div>

									<div class="pl-10">
										<a href="#" class="clear-cart" onclick="cart.clearCart()">Очистить корзину</a>
									</div>
									<!-- /.pl-10 -->

									<ul id="cartPreview" class="collection"></ul>
								</div>
								<!-- /.dropdown-cart -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- /.col s12 -->

			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(1, {title: `СТАХАНОВЕЦ 9.10`, price: 14128, image: 'img/stah.jpg'})"><i class="material-icons">add_shopping_cart</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.10</b></h6>
						<h5 class="red-text">₽14128</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.10 - 04.02.22</p>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col.s4 -->

			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(2, {title: `СТАХАНОВЕЦ 9.03`, price: 13650, image: 'img/stah.jpg'})"><i class="material-icons">add_shopping_cart</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.03</b></h6>
						<h5 class="red-text">₽13650</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.03 - 17.01.22</p>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col.s4 -->

			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(3, {title: `СТАХАНОВЕЦ 9.01`, price: 12280, image: 'img/stah.jpg'})"><i class="material-icons">add_shopping_cart</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.01</b></h6>
						<h5 class="red-text">₽12280</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.01 - 10.12.21</p>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col.s4 -->

			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(4, {title: `СТАХАНОВЕЦ 9.00`, price: 11550, image: 'img/stah.jpg'})"><i class="material-icons">add_shopping_cart</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.00</b></h6>
						<h5 class="red-text">₽11550</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.00 - 25.11.21</p>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col.s4 -->

			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(5, {title: `СТАХАНОВЕЦ 8.86`, price: 10350, image: 'img/stah.jpg'})"><i class="material-icons">add_shopping_cart</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 8.86</b></h6>
						<h5 class="red-text">₽10350</h5>
						<p class="grey-text">СТАХАНОВЕЦ 8.86 - 29.10.21</p>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col.s4 -->

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->



	<script src="js/angry-cart.min.js"></script>

	<script>

		let cart = new AngryCart({
			counter: '#cartCount',
			totalPrice: '#totalPrice',
		});

		function angryCPR() {
			let myCart = JSON.parse(localStorage.getItem(angryCartKey)), // "angryCartKey" - ключ корзины в localStorage (const)
				renderBlock = document.getElementById('cartPreview');

			/* Очищаем блок перед выводом */
			renderBlock.innerHTML = '';

			if( myCart.length != 0 )
			{
				/* Выводим товары из корзины */
				Array.from(myCart).forEach( function(product) {
					renderBlock.insertAdjacentHTML('beforeEnd', `
						<li class="collection-item avatar">
							<img src="${product.data.image}" alt="" class="circle">
							<h6>${product.data.title} <span class="grey-text">x ${product.quantity}</span> <span class="red-text d-block">₽${product.data.price}</span></h6>
							<button class="delete_btn" onclick="cart.removeFromCart(${product.product_id})">Удалить</button>
						</li>
					`);
				});
			}
			else
			{
				renderBlock.innerHTML = '<li class="grey-text pl-10 pr-10">Корзина пуста</li>';
			}


		}

	</script>


	<script>
		let cartToggle = document.getElementById('showCart');

		cartToggle.addEventListener('click', () => {
			document.getElementById('dropdownCart').classList.toggle('show');
		});
	</script>

</body>
</html>

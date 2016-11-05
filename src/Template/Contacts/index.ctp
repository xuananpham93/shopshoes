<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);

	#contact input[type="text"],
	#contact input[type="email"],
	#contact input[type="tel"],
	#contact input[type="url"],
	#contact textarea,
	#contact button[type="submit"] {
		font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
	}

	#contact {
		background: #F9F9F9;
		padding: 25px;
		margin: 50px 0 150px;
		box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}

	#contact h3 {
		display: block;
		font-size: 30px;
		font-weight: 300;
		margin-bottom: 10px;
	}

	#contact h4 {
		margin: 5px 0 15px;
		display: block;
		font-size: 13px;
		font-weight: 400;
	}

	fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		padding: 0;
		width: 100%;
	}

	#contact input[type="text"],
	#contact input[type="email"],
	#contact input[type="tel"],
	#contact input[type="url"],
	#contact textarea {
		width: 100%;
		border: 1px solid #ccc;
		background: #FFF;
		margin: 0 0 5px;
		padding: 10px;
	}

	#contact input[type="text"]:hover,
	#contact input[type="email"]:hover,
	#contact input[type="tel"]:hover,
	#contact input[type="url"]:hover,
	#contact textarea:hover {
		-webkit-transition: border-color 0.3s ease-in-out;
		-moz-transition: border-color 0.3s ease-in-out;
		transition: border-color 0.3s ease-in-out;
		border: 1px solid #aaa;
	}

	#contact textarea {
		height: 100px;
		max-width: 100%;
		resize: none;
	}

	#contact button[type="submit"] {
		cursor: pointer;
		width: 100%;
		border: none;
		background: #4CAF50;
		color: #FFF;
		margin: 0 0 5px;
		padding: 10px;
		font-size: 15px;
	}

	#contact button[type="submit"]:hover {
		background: #43A047;
		-webkit-transition: background 0.3s ease-in-out;
		-moz-transition: background 0.3s ease-in-out;
		transition: background-color 0.3s ease-in-out;
	}

	#contact button[type="submit"]:active {
		box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
	}

	#contact input:focus,
	#contact textarea:focus {
		outline: 0;
		border: 1px solid #aaa;
	}

	::-webkit-input-placeholder {
		color: #888;
	}

	:-moz-placeholder {
		color: #888;
	}

	::-moz-placeholder {
		color: #888;
	}

	:-ms-input-placeholder {
		color: #888;
	}
</style>

<div class="col-sm-6 col-sm-offset-3"> 
	<?php echo $this->Form->create('Contacts', array('id'=>'contact')) ?>
		<h3>Liên hệ</h3>
		<h4>Gửi phản hồi cho chúng tôi</h4>
		<fieldset>
			<input placeholder="Your name" name="name" type="text" tabindex="1" autofocus>
		</fieldset>
		<fieldset>
			<input placeholder="Your Email Address" name="email" type="email" tabindex="2" >
		</fieldset>
		<fieldset>
			<input placeholder="Your Phone Number" name="mobile" type="tel" tabindex="3" >
		</fieldset>
		<fieldset>
			<input placeholder="Title" type="text" name="title" tabindex="4" >
		</fieldset>
		<fieldset>
			<textarea placeholder="Type your message here...." name="content" tabindex="5" ></textarea>
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit">Submit</button>
		</fieldset>
	<?php echo $this->Form->end() ?>
</div>
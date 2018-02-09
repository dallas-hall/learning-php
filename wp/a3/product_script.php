<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
/* The idea of this was taken from Trevor's video that he posted onto the discussion forum */
define(PRODUCT_ID, $_GET['productID']);

$allProducts = ['videoTransfer', 'videoProduction'
	,'simplyTarotSetDVD', 'simplyTarotSetNoDVD', 'simplyTarotCandleLarge',	'simplyTarotCandlesSmall'
	,'secretsOfTarotSet', 'secretsOfTarotCandleLarge', 'secretsOfTarotCandlesSmall'];
if(!isset($_GET[productID]) || !in_array(PRODUCT_ID, $allProducts, true)) {
	header('Location: products.php');
}
/*echo PRODUCT_ID;*/
$productsTree = array(
	'videoTransfer' => array(
		'productTitle' => 'Video Transfer'
		,'productImage' => 'img/products/video/vcr.jpg'
		,'productImageText' => 'A picture of a VHS player, some remotes, and various types of tapes.'
		,'productDescription' => 'In today’s fast moving world our lives move so fast and memories fade just as quick. We all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day . Get them out sort through them. What is special and you want to keep for future generations. They make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.'
		,'normalPrice' => '30.00'
		,'salePrice' => '0.00'
		/*,'sourceTypes' => array('vhs', 'super8')
		,'targetTypes' => array('cd', 'dvd', 'usb', 'sdcard')*/
		,'Testimonials' => array (
			'Quotes' => array (
				'<i>"Jack you are awesome. The music clips are just so awesome.– Love them all big fella."</i><br>Roger Pearson - Musician &amp; song writer.'
			)
			,'Samples' => array(
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/N9BhV2Pt4aI" frameborder="0" allowfullscreen></iframe>'
				,'<iframe width="320" height="240" src="https://www.youtube.com/embed/U0ifHJfq5RI" frameborder="0" allowfullscreen></iframe>'
			)
		)
	)

	,'simplyTarotSetDVD' => array(
		'productTitle' => 'Simply Tarot Set With DVD'
		,'productImage' => 'img/products/psychic/tarot/simply/simply_dvd_book_and_card.jpg'
		,'productImageText' => ''
		,'productDescription' => ''
		,'normalPrice' => '103.00'
		,'salePrice' => '0.00'
		,'Testimonials' => array (
			'Quotes' => array (
					'<i>"Your cards helped me to become a professional reader. I have a massive soft spot for the cards. And the DVD that came with them helped too. I just can’t say a big enough thank you - xxx. You certainly can place my comment on the site. They have got a magic. Really lovely. I recommend them to others who are new to tarot also x"</i> - Sophie'
				)
			,'Samples' => array(
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/Enfs2-KBgdg" frameborder="0" allowfullscreen></iframe>'
			)
		)
	)

	,'simplyTarotSetNoDVD' => array(
		'productTitle' => 'Simply Tarot Set Without DVD'
		,'productImage' => 'img/products/psychic/tarot/simply/simply_book_and_card.jpg'
		,'productImageText' => ''
		,'productDescription' => ''
		,'normalPrice' => '83.00'
		,'salePrice' => '0.00'
		,'Testimonials' => array (
			'Quotes' => array (
				'<i>"Your cards helped me to become a professional reader. I have a massive soft spot for the cards. And the DVD that came with them helped too. I just can’t say a big enough thank you - xxx. You certainly can place my comment on the site. They have got a magic. Really lovely. I recommend them to others who are new to tarot also x"</i> - Sophie'
			)
		,'Samples' => array(
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/Enfs2-KBgdg" frameborder="0" allowfullscreen></iframe>'
			)
		)
	)

	,'simplyTarotCandleLarge' => array(
		'productTitle' => '1 Large Simply Tarot Candle'
		,'productImage' => 'img/products/psychic/candles/simply/large_simply_candle.jpg'
		,'productImageText' => ''
		,'productDescription' => 'In today’s fast moving world our lives move so fast and memories fade just as quick. We all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day . Get them out sort through them. What is special and you want to keep for future generations. They make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.'
		,'normalPrice' => '57.95'
		,'salePrice' => '0.00'
		,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
				,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
				,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
				,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
				,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
			,'Samples' => array(
				''
			)
		)
	)

	,'simplyTarotCandlesSmall' => array(
		'productTitle' => '3 Small Simply Tarot Candles'
		,'productImage' => 'img/products/psychic/candles/simply/3_small_simply_candle.jpg'
		,'productImageText' => ''
		,'productDescription' => 'In today’s fast moving world our lives move so fast and memories fade just as quick. We all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day . Get them out sort through them. What is special and you want to keep for future generations. They make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.'
		,'normalPrice' => '49.95'
		,'salePrice' => '0.00'
		,'Testimonials' => array (
				'Quotes' => array (
					'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
				,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
				,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
				,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
				,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
			,'Samples' => array(
					''
			)
		)
	)

	,'secretsOfTarotSet' => array(
		'productTitle' => 'Secrets Of Tarot Set'
		,'productImage' => 'img/products/psychic/tarot/secrets/secrets_book_and_card.jpg'
		,'productImageText' => ''
		,'productDescription' => '<p>Secrets of  Tarot is now the latest edition to the Tarot family.
Our very own Simply Tarot  has a face lift with a new look 
The meaning on the Tarot cards have not changed just the look and finish.
Yes Tarot has been my  life’s work of many years of reading and teaching over the years.
Now with the Secrets of Tarot the dream lives on in a new dress
So then people would be able to learn quickly in the privacy of their own home.
I feel very humbled and honoured my Australian Publisher Hinkler Books want to keep the Tarot journey alive 
Now with the old world charm of the Secrets of Tarot cards face lift is a new era for a new audience .
So now a new journey begins with the the Secrets Of Tarot. 
I will always have a soft spot for our original Simply Tarot Cards and hope to keep them in production.
Over the years I have worked with many professionals who love love working with the Simply Tarot
and love to share the stories of how they work for them and how their clients just love the energy.
So I am excited and look forward to hearing the stories of Secrets Of Tarot from everyone.
So please feel free to share your stories with us here on or on social media we love to know.
I have felt the original artist Pamela Coleman-Smith and Author Edward Waite
would be proud of our Simply Tarot Deck & Secrets OF Tarot.</p>
<p>During my time teaching students over the years
It was always hard fro them to remember the meaning of the cards from their work book.
So I suggested we print the meaning on the bottom of the card.
This made teaching so easy for me and the students love it.
Reading the Tarot became easy and they were confident with ability quickly.
Our new book is easy to work with and makes it easy to reference when performing a reading.</p>'
		,'normalPrice' => '49.95'
		,'salePrice' => '0.00'
		,'Testimonials' => array (
			'Quotes' => array (
				''
			)
			,'Samples' => array(
				''
			)
		)
	)

	,'secretsOfTarotCandleLarge' => array(
		'productTitle' => '1 Large Secrets Of Tarot Candle'
	,'productImage' => 'img/products/psychic/candles/secrets/large_secrets_candle.jpg'
	,'productImageText' => ''
	,'productDescription' => 'In today’s fast moving world our lives move so fast and memories fade just as quick. We all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day . Get them out sort through them. What is special and you want to keep for future generations. They make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.'
	,'normalPrice' => '57.95'
	,'salePrice' => '0.00'
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
			,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
			,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
			,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
			,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
		,'Samples' => array(
				''
			)
		)
	)

	,'secretsOfTarotCandlesSmall' => array(
		'productTitle' => '3 Small Secrets Of Tarot Candles'
	,'productImage' => 'img/products/psychic/candles/secrets/3_small_secrets_candle.jpg'
	,'productImageText' => ''
	,'productDescription' => 'In today’s fast moving world our lives move so fast and memories fade just as quick. We all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day . Get them out sort through them. What is special and you want to keep for future generations. They make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun. We can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.'
	,'normalPrice' => '49.95'
	,'salePrice' => '0.00'
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
			,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
			,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
			,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
			,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
		,'Samples' => array(
				''
			)
		)
	)
);
/*showFormattedArray($productsTree);*/
?>
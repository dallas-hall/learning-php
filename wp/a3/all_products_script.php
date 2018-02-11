<?php
/* Valid product list */
$allProducts = ['videoTransfer', 'videoProduction'
	,'simplyTarotSetDVD', 'simplyTarotSetNoDVD', 'simplyTarotCandleLarge',	'simplyTarotCandlesSmall'
	,'secretsOfTarotSet', 'secretsOfTarotCandleLarge', 'secretsOfTarotCandlesSmall'];

/* Valid product data */
$productsTree = array (
	'videoTransfer' => array (
		'productTitle' => 'Video Transfer'
		,'productImage' => 'img/products/video/vcr.jpg'
		,'productImageText' => 'A picture of a VHS player, some remotes, and various types of tapes.'
		,'productImageWidth' => '480'
		,'productImageHeight' => '272'
		,'productDescription' => "
\t\t\t\t<p>In today’s fast moving world our lives move so fast and memories fade just as quick.
\t\t\t\tWe all have some old tapes locked in a cupboard that we are going to do something with. Well today is the day.
\t\t\t\tGet them out sort through them. What is special and you want to keep for future generations.
\t\t\t\tThey make a lovely gift to give. Being able to share memories from family history, special occasions, weddings, christenings, or even the family just having fun.
\t\t\t\tWe can transfer old VHS and Super 8 to CD, DVD, SD Card, or USB memory stick.</p>
\t\t\t\t<p>The video transfer services we provide are:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>Transfer VHS or Super 8 to CD.</li>
\t\t\t\t\t<li>Transfer VHS or Super 8 to DVD.</li>
\t\t\t\t\t<li>Transfer VHS or Super 8 to USB.</li>
\t\t\t\t\t<li>Transfer VHS or Super 8 to SD Card.</li>
\t\t\t\t</ul>\n"
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '30.00'
				,'salePrice' => '0.00'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => null
				,'internationalPostagePrice' => null
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"Jack you are awesome. The music clips are just so awesome.– Love them all big fella."</i><br>Roger Pearson - Musician &amp; song writer.'
			)
		,'Samples' => array (
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/N9BhV2Pt4aI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			,'<iframe width="320" height="240" src="https://www.youtube.com/embed/U0ifHJfq5RI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			)
		)
	)

,'videoProduction' => array (
		'productTitle' => 'Video Production'
	,'productImage' => 'img/people/jack_and_client.jpg'
	,'productImageText' => 'A picture of a Jack Egerton and a country band in the Australian outback.'
	,'productImageWidth' => '480'
	,'productImageHeight' => '272'
	,'productDescription' => "
\t\t\t\t<p>The video productions services we provide are:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>Filming &amp; editing</li>
\t\t\t\t\t<li>Pre &amp; post production</li>
\t\t\t\t\t<li>Photography (using film stills)</li>
\t\t\t\t\t</ul>
\t\t\t\t<p>Please contact us with your job's details so we can arrange a free and obligation free quote.
\t\t\t\tSorry, but we do not do weddings due to high insurance costs.</p>
\t\t\t\t<p>The events that we typically offer video production services for are:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>Family events.</li>
\t\t\t\t\t<li>Music events.</li>
\t\t\t\t\t<li>Social events.</li>
\t\t\t\t\t<li>Sporting events.</li>
\t\t\t\t</ul>\n"
	,'price' => array (
			'hasPrice' => false
		,'shopPrice' => array (
				'normalPrice' => null
			,'salePrice' => null
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => null
			,'internationalPostagePrice' => null
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				null
			)
		,'Samples' => array (
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/c0YC5aQFqVQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			,'<iframe width="320" height="240" src="https://www.youtube.com/embed/IYPVS55EW_M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			)
		)
	)

,'simplyTarotSetDVD' => array (
		'productTitle' => 'Simply Tarot Set With DVD'
	,'productImage' => 'img/products/psychic/tarot/simply/simply_dvd_book_and_card.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '480'
	,'productImageHeight' => '272'
	,'productDescription' => '<h2>Can I Teach Myself Tarot?</h2>
<p>Yes we can also teach our selves Tarot.
It is very easy with our step-by-step-guide to learning Tarot with my tried and tested method.</p>
<p>During my time teaching students over the years
it was always hard for them to remember the meaning of the cards from their work book.
So I suggested we print the meaning on the bottom of the card.
This made teaching so easy for me and the students love it.
Reading the Tarot became easy and they were confident with ability quickly.
We chose to make a DVD for those people who find it easier to learn visually.
Our book is mirror of the DVD and this makes it easy to reference when performing a reading.</p> 
<p>This Simply Tarot Set includes:</p>
<ul>
  <li>Simply Tarot Training DVD.</li>
  <li>Simply Tarot Training Book.</li>
  <li>Simply Tarot Card Set.</li>
</ul>'
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '103.00'
			,'salePrice' => '0.00'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
			,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"Your cards helped me to become a professional reader. I have a massive soft spot for the cards. And the DVD that came with them helped too. I just can’t say a big enough thank you - xxx. You certainly can place my comment on the site. They have got a magic. Really lovely. I recommend them to others who are new to tarot also x"</i> - Sophie'
			)
		,'Samples' => array (
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/Enfs2-KBgdg" frameborder="0" allowfullscreen></iframe>'
			)
		)
	)

,'simplyTarotSetNoDVD' => array (
		'productTitle' => 'Simply Tarot Set Without DVD'
	,'productImage' => 'img/products/psychic/tarot/simply/simply_book_and_card.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '480'
	,'productImageHeight' => '272'
	,'productDescription' => '
<h2>Can I Teach Myself Tarot?</h2>
<p>Yes we can also teach our selves Tarot.
Yes it is very easy with our step-by-step-guide to learning Tarot with my tried and tested method
So take the next step today and buy your very own set.
A new career might born.</p>
<p>During my time teaching students over the years
it was always hard for them to remember the meaning of the cards from their work book.
So I suggested we print the meaning on the bottom of the card.
This made teaching so easy for me and the students love it.
Reading the Tarot became easy and they were confident with ability quickly.
Our book is simple and easy to follow in full colour makes it easy to reference when performing a reading.</p>
<p>This Simply Tarot Set includes:</p>
<ul>
  <li>Simply Tarot Training Book.</li>
  <li>Simply Tarot Card Set.</li>
</ul>
'
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '83.00'
			,'salePrice' => '0.00'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
			,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"Your cards helped me to become a professional reader. I have a massive soft spot for the cards. And the DVD that came with them helped too. I just can’t say a big enough thank you - xxx. You certainly can place my comment on the site. They have got a magic. Really lovely. I recommend them to others who are new to tarot also x"</i> - Sophie'
			)
		,'Samples' => array (
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/Enfs2-KBgdg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			)
		)
	)

,'simplyTarotCandleLarge' => array (
		'productTitle' => '1 Large Simply Tarot Candle'
	,'productImage' => 'img/products/psychic/candles/simply/large_simply_candle.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '420'
	,'productImageHeight' => '488'
	,'productDescription' => 'I LOVE CANDLES YO.'
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '57.95'
				,'salePrice' => '48.99'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
				,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
			,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
			,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
			,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
			,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
		,'Samples' => array (
				'
<p>Creating sacred reading space. Increase intuition.
Simply Tarot 100 % Natural Eco Soy X Large Candle
Intent- Purpose – Direction
 Candle Fragrance – Lavender & Vanilla 
Simply Tarot X Large Candle Natural Eco Soy Candle to set your intent- direction – purpose</p>'
			)
		)
	)

,'simplyTarotCandlesSmall' => array (
		'productTitle' => '3 Small Simply Tarot Candles'
	,'productImage' => 'img/products/psychic/candles/simply/3_small_simply_candle.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '480'
	,'productImageHeight' => '272'
	,'productDescription' => 'I LOVE CANDLES YO.'
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '45.95'
				,'salePrice' => '36.95'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
				,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
			,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
			,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
			,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
			,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
		,'Samples' => array (
				''
			)
		)
	)

,'secretsOfTarotSet' => array (
		'productTitle' => 'Secrets Of Tarot Set'
	,'productImage' => 'img/products/psychic/tarot/secrets/secrets_book_and_card.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '420'
	,'productImageHeight' => '488'
	,'productDescription' => '<p>Secrets of  Tarot is now the latest edition to the Tarot family.
Our very own Simply Tarot  has a face lift with a new look 
The meaning on the Tarot cards have not changed just the look and finish.
Yes Tarot has been my  life’s work of many years of reading and teaching over the years.
Now with the Secrets of Tarot the dream lives on in a new dress
So then people would be able to learn quickly in the privacy of their own home.
I feel very humbled and honoured by Australian Publisher Hinkler Books wanting to keep the Tarot journey alive 
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
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '49.95'
				,'salePrice' => '0.00'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
				,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				''
			)
		,'Samples' => array (
				'<iframe width="320" height="240" src="https://www.youtube.com/embed/MXQiXjYr1Xo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			)
		)
	)

,'secretsOfTarotCandleLarge' => array (
		'productTitle' => '1 Large Secrets Of Tarot Candle'
	,'productImage' => 'img/products/psychic/candles/secrets/large_secrets_candle.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '420'
	,'productImageHeight' => '488'
	,'productDescription' => 'I LOVE CANDLES YO.
	'
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '57.95'
				,'salePrice' => '48.99'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
				,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
			,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
			,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
			,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
			,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
		,'Samples' => array (
				'<iframe "320" height="240" src="https://www.youtube.com/embed/SCgunZNvSIk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			)
		)
	)

,'secretsOfTarotCandlesSmall' => array (
		'productTitle' => '3 Small Secrets Of Tarot Candles'
	,'productImage' => 'img/products/psychic/candles/secrets/3_small_secrets_candle.jpg'
	,'productImageText' => ''
	,'productImageWidth' => '480'
	,'productImageHeight' => '272'
	,'productDescription' => 'I LOVE CANDLES YO.'
	,'price' => array (
			'hasPrice' => true
		,'shopPrice' => array (
				'normalPrice' => '49.95'
				,'salePrice' => '36.95'
			)
		,'postagePrice' => array (
				'domesticPostagePrice' => '0.00'
			,'internationalPostagePrice' => '45.00'
			)
		)
	,'Testimonials' => array (
			'Quotes' => array (
				'<i>"It was so lovely to see you Amanda and your beautiful new candle range they’re amazing.</i>" - Maz Rukz '
			,'<i>"It certainly was amazing, and special for us all to be in the same place together, connecting, yaking, laughing, made my heart sing! Lighting my very special new Amanda candles today.</i>" - Gerry Crow'
			,'<i>"I’m loving them. Best purchase I tell you and they smell so good you could eat them.</i>" - Kat Simicevic'
			,'<i>"Beautiful Smelling Candles for Every situation.. Amanda Halls Awesome Collection.</i>" - Terry Virgina'
			,'<i>"How blessed am I to receive these candles in the mail today. So grateful for all the wonderful gifts in life!! Wishing you all magic miracles every day. ❤</i>" - Magic Maree'
			)
		,'Samples' => array (
				'<iframe "320" height="240" src="https://www.youtube.com/embed/SCgunZNvSIk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
			)
		)
	)
);
//showFormattedarray ($productsTree);
?>
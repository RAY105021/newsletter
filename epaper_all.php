<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>雷科股份有限公司-入口網站</title>
	<meta name="description" content="Blueprint: Responsive Full Width Grid Layout" />
	<meta name="keywords" content="100% grid, layout, columns, images, thumbnails, responsive, full width grid, image grid, css, jquery" />
	<meta name="author" content="Codrops" />
	<!-- 使用兩種方式清除快取方式_1 -->
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<!-- 使用兩種方式清除快取方式_2 END-->
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- 問卷 -->
	<link rel="stylesheet" type="text/css" href="css/jqtipnav.min.css" />
	<!-- 跑馬燈 -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.js"></script>
	<script type="text/javascript">
		/* 加入我的最愛
		 */
		$(function() {
			$('#bookmarkme').click(function() {
				if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
					window.sidebar.addPanel(document.title, window.location.href, '');
					console.log("blog.webgolds.com");
				} else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
					window.external.AddFavorite(location.href, document.title);
					//blog.webgolds.com/
				} else if (window.opera && window.print) { // Opera Hotlist
					this.title = document.title;
					return true;
				} else { // webkit - safari/chrome
					alert('抱歉!!您的瀏覽器不支援此功能，請連絡MIS');
				}
			});
		});
	</script>

	<!-- 另開視窗  -->
	<link rel="stylesheet" href="css/jquery.remodal.css">
	<!-- GOOGLE流量 -->
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-82641040-4', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- EMAIL專用 -->
	<link rel="stylesheet" href="css/email.css">

</head>

<body>
	<div class="container">

		<header class="clearfix">
			<div class="logo"><img src="images/logo.png" width="570" height="70"></div>
			<div class="favorites">

				<!-- 搜尋 -->
				<!--<div class="favorites_bottom">
					<script>
						(function() {
							var cx = '006411725132548313857:17svugpgufw';
							var gcse = document.createElement('script');
							gcse.type = 'text/javascript';
							gcse.async = true;
							gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						})();
					</script>
					<gcse:search></gcse:search>
				</div>-->
			</div>
		</header>

		<!-- 最新消息- -->



		<!-- 雷科報報 -->
		<div class="cbp-rfgrid">
			<table id="table">
				<thead>
					<tr>
						<th width="120">出刊時間</th>
						<th width="520">內容</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<td>20220101 (三)</td>
						<td><a href="epaper/202201.html" target="_blank"> 第五十五期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20211203 (五)</td>
						<td><a href="epaper/202112.html" target="_blank"> 第五十四期 - 雷科報報</a></td>
					</tr>
				    <tr>
						<td>20211105 (五)</td>
						<td><a href="epaper/202111.html" target="_blank"> 第五十三期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20211005 (二)</td>
						<td><a href="epaper/202110.html" target="_blank"> 第五十二期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210903 (五)</td>
						<td><a href="epaper/202109.html" target="_blank"> 第五十一期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210805 (四)</td>
						<td><a href="epaper/202108.html" target="_blank"> 第五十期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210705 (一)</td>
						<td><a href="epaper/202107.html" target="_blank"> 第四十九期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210604 (五)</td>
						<td><a href="epaper/202106.html" target="_blank"> 第四十八期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210505 (三)</td>
						<td><a href="epaper/202105.html" target="_blank"> 第四十七期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210401 (四)</td>
						<td><a href="epaper/202104.html" target="_blank"> 第四十六期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210305 (五)</td>
						<td><a href="epaper/202103.html" target="_blank"> 第四十五期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210205 (五)</td>
						<td><a href="epaper/202102.html" target="_blank"> 第四十四期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20210105 (二)</td>
						<td><a href="epaper/202101.html" target="_blank"> 第四十三期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20201204 (四)</td>
						<td><a href="epaper/202012.html" target="_blank"> 第四十二期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20201105 (四)</td>
						<td><a href="epaper/202011.html" target="_blank"> 第四十ㄧ期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20201005 (一)</td>
						<td><a href="epaper/202010.html" target="_blank"> 第四十期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200904 (五)</td>
						<td><a href="epaper/202009.html" target="_blank"> 第三十九期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200805 (三)</td>
						<td><a href="epaper/202008.html" target="_blank"> 第三十八期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200703 (五)</td>
						<td><a href="epaper/202007.html" target="_blank"> 第三十七期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200605 (五)</td>
						<td><a href="epaper/202006.html" target="_blank"> 第三十六期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200505 (二)</td>
						<td><a href="epaper/202005.html" target="_blank"> 第三十五期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200401 (三)</td>
						<td><a href="epaper/202004.html" target="_blank"> 第三十四期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200305 (四)</td>
						<td><a href="epaper/202003.html" target="_blank"> 第三十三期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200205 (三)</td>
						<td><a href="epaper/202002.html" target="_blank"> 第三十二期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20200103 (五)</td>
						<td><a href="epaper/202001.html" target="_blank"> 第三十一期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20191205 (四)</td>
						<td><a href="epaper/201912.html" target="_blank"> 第三十期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20191105 (二)</td>
						<td><a href="epaper/201911.html" target="_blank"> 第二十九期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20191005 (六)</td>
						<td><a href="epaper/201910.html" target="_blank"> 第二十八期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190905 (四)</td>
						<td><a href="epaper/201909.html" target="_blank"> 第二十七期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190805 (一)</td>
						<td><a href="epaper/201908.html" target="_blank"> 第二十六期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190705 (五)</td>
						<td><a href="epaper/201907.html" target="_blank"> 第二十五期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190605 (三)</td>
						<td><a href="epaper/201906.html" target="_blank"> 第二十四期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190503 (五)</td>
						<td><a href="epaper/201905.html" target="_blank"> 第二十三期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190403 (二)</td>
						<td><a href="epaper/201904.html" target="_blank"> 第二十二期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190305 (二)</td>
						<td><a href="epaper/201903.html" target="_blank"> 第二十一期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190201 (五)</td>
						<td><a href="epaper/201902.html" target="_blank"> 第二十期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20190104 (五)</td>
						<td><a href="epaper/201901.html" target="_blank"> 第十九期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20181205 (三)</td>
						<td><a href="epaper/201812.html" target="_blank"> 第十八期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20181105 (一)</td>
						<td><a href="epaper/201811.html" target="_blank"> 第十七期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20181005 (五)</td>
						<td><a href="epaper/201810.html" target="_blank"> 第十六期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180905 (三)</td>
						<td><a href="epaper/201809.html" target="_blank"> 第十五期 - 雷科報報</a></td>
					</tr>

					<tr>
						<td>20180803 (五)</td>
						<td><a href="epaper/201808.html" target="_blank"> 第十四期 - 雷科報報</a></td>
					</tr>

					<tr>
						<td>20180705 (四)</td>
						<td><a href="epaper/201807.html" target="_blank"> 第十三期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180605 (二)</td>
						<td><a href="epaper/201806.html" target="_blank"> 第十二期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180504 (五)</td>
						<td><a href="epaper/201805.html" target="_blank"> 第十一期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180403 (二)</td>
						<td><a href="epaper/201804.html" target="_blank"> 第十期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180305 (一)</td>
						<td><a href="epaper/201803.html" target="_blank"> 第九期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180205 (一)</td>
						<td><a href="epaper/201802.html" target="_blank"> 第八期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20180105 (五)</td>
						<td><a href="epaper/201801.html" target="_blank"> 第七期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20171205 (二)</td>
						<td><a href="epaper/201712.html" target="_blank"> 第六期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20171103 (五)</td>
						<td><a href="epaper/201711.html" target="_blank"> 第五期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20171005 (四)</td>
						<td><a href="epaper/201710.html" target="_blank"> 第四期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20170905 (二)</td>
						<td><a href="epaper/201709.html" target="_blank"> 第三期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20170805 (六)</td>
						<td><a href="epaper/201708.html" target="_blank"> 第二期 - 雷科報報</a></td>
					</tr>
					<tr>
						<td>20170707 (五)</td>
						<td><a href="epaper/201707.html" target="_blank"> 第一期 - 雷科報報創刊號</a></td>
					</tr>

					<tr>
						<td></td>
						<td></td>

					</tr>
					<tr>
						<td></td>
						<td></td>

					</tr>
					<tr>
						<td></td>
						<td></td>

					</tr>
				</tbody>
			</table>
		</div>





		<footer>
			<p>雷科股份有限公司 更新時間 2019-07-05</p>
			<img src="images/footer.jpg" width="30" height="30">
		</footer>

	</div>
	<script type="text/javascript">
		// //////////////////跑馬燈專用///////////////////////
		$(function() {
			// 先取得 div#abgne_marquee ul
			// 接著把 ul 中的 li 項目再重覆加入 ul 中(等於有兩組內容)
			// 再來取得 div#abgne_marquee 的高來決定每次跑馬燈移動的距離
			// 設定跑馬燈移動的速度及輪播的速度
			var $marqueeUl = $('div#abgne_marquee ul'),
				$marqueeli = $marqueeUl.append($marqueeUl.html()).children(),
				_height = $('div#abgne_marquee').height() * -1,
				scrollSpeed = 800,
				timer,
				speed = 3000 + scrollSpeed,
				direction = 0, // 0 表示往上, 1 表示往下
				_lock = false;

			// 先把 $marqueeli 移動到第二組
			$marqueeUl.css('top', $marqueeli.length / 2 * _height);

			// 幫左邊 $marqueeli 加上 hover 事件
			// 當滑鼠移入時停止計時器；反之則啟動
			$marqueeli.hover(function() {
				clearTimeout(timer);
			}, function() {
				timer = setTimeout(showad, speed);
			});

			// 判斷要往上還是往下
			$('div#abgne_marquee .marquee_btn').click(function() {
				if (_lock) return;
				clearTimeout(timer);
				direction = $(this).attr('id') == 'marquee_next_btn' ? 0 : 1;
				showad();
			});

			// 控制跑馬燈上下移動的處理函式
			function showad() {
				_lock = !_lock;
				var _now = $marqueeUl.position().top / _height;
				_now = (direction ? _now - 1 + $marqueeli.length : _now + 1) % $marqueeli.length;

				// $marqueeUl 移動
				$marqueeUl.animate({
					top: _now * _height
				}, scrollSpeed, function() {
					// 如果已經移動到第二組時...則馬上把 top 設回到第一組的最後一筆
					// 藉此產生不間斷的輪播
					if (_now == $marqueeli.length - 1) {
						$marqueeUl.css('top', $marqueeli.length / 2 * _height - _height);
					} else if (_now == 0) {
						$marqueeUl.css('top', $marqueeli.length / 2 * _height);
					}
					_lock = !_lock;
				});

				// 再啟動計時器
				timer = setTimeout(showad, speed);
			}

			// 啟動計時器
			timer = setTimeout(showad, speed);

			$('a').focus(function() {
				this.blur();
			});
		});


		////////////////使用兩種方式清除快取方式_2/////////////
		$(document).ready(function() {
			jQuery('img').each(function() {
				jQuery(this).attr('src', jQuery(this).attr('src') + '?' + (new Date()).getTime());
			});
		});


		///////////////////////開啟視窗///////////////////////
		$(document).on('open', '.remodal', function() {
			console.log('open');
		});

		$(document).on('opened', '.remodal', function() {
			console.log('opened');
		});

		$(document).on('close', '.remodal', function() {
			console.log('close');
		});

		$(document).on('closed', '.remodal', function() {
			console.log('closed');
		});

		$(document).on('confirm', '.remodal', function() {
			console.log('confirm');
		});

		$(document).on('cancel', '.remodal', function() {
			console.log('cancel');
		});

		// You can open or close it like this:
		// var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];
		// inst.open();
		// inst.close();

		// Or init in this way:
		var inst = $('[data-remodal-id=modal2]').remodal();
		// inst.open();
	</script>

	<!-- 另開視窗 -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')
	</script>
	<script src="js/jquery.remodal.js"></script>


	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/jqtipnav.min.js"></script>
	<script>
		var options = {
			'action_element': $('#action-link-01')
		};
		$('#tipnav-container-01').tipnav(options);
		$('.tipnav').tipnav({
			'action_element': $('#action-link-02'),
			'fade_time': 2000,
			'trigger_event': 'click'
		});
	</script>

</body>

</html>
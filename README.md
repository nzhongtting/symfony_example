해당 폴더에서 아래와 같이 실행&nbsp;<br />
<br />
#&gt; composer create-project symfony/skeleton the_example004&nbsp;
<div>#&gt; cd the_example004</div>
<div>#&gt; composer require annotations</div>
<div>#&gt; composer require twig<br />
&nbsp;</div>
<div>src\Controller\Example004Controller.php 작성<br />
<img src="http://www.hongtting.com/Front/upload/6264665155bd14c9a94bd9.PNG" width="720" height="488" alt="" /></div>
<div><br />
templates\temppage\show.html.twig 작성<br />
<img src="http://www.hongtting.com/Front/upload/10367688765bd14cb290bf1.PNG" width="720" height="323" alt="" /><br />
<br />
#&gt; php -S 127.0.0.1:8000 -t public<br />
&nbsp;</div>
<div>브라우져 화면에 실행&nbsp;</div>
<div><img src="http://www.hongtting.com/Front/upload/14362010325bd14cc764c87.PNG" width="720" height="480" alt="" /></div>
<br />
소스 :<a href="https://github.com/nzhongtting/symfony_example/tree/example003">  symfony_example 브랜치(branch) &gt; example003</a>

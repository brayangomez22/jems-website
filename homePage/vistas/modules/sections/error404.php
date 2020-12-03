<!--==============================================
 ERROR 404 
================================================-->

<div class="error404">
    <div id="container">
        <div class="content">
            <h2>404</h2>
            <h4>0pps! page no found</h4>
            <p>The page you were looking for doesn't exist. You may have mistyped the address or the page may have moved.</p>
            <a href="#">Back to home</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    var container = document.getElementById('container');
    window.onmousemove = function(e){
        var x = e.clientX/5,
            y = e.clientY/5;

        container.style.backgroundPositionX = x + 'px';
        container.style.backgroundPositionY = y + 'px';
    }
</script>
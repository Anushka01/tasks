<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sharing Button</title>
<link rel="stylesheet" href="style_share_btn.css">
<!-- code only works on https -->
<script>
document.querySelector('.share-btn').addEventListerner('click',function(){
console.log('clicked');
if (navigator.share) {
  navigator.share({
      title: 'Web Fundamentals',
      text: 'Check out Web Fundamentals — it rocks!',
      url: 'https://developers.google.com/web',
  })
    .then(() =>{ console.log('Successful share')
    })
    .catch((error) => { console.log('Error sharing', error) 
    } );
} else { console.log('web share not supported'); }

});

</script>
</head>
<body>
<div class="share-btn">
<div class="txt">Click to Share</div>
</div>
</body>
</html>

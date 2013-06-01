<!DOCTYPE html>
<html>
 <head>
<script type="text/javascript">
//get data
ajax.get('test.json', function(response) { 
    if(response) { 
        alert(response); 
      }
   });
//post data
ajax.post('post.php', { name: 'Roman', age: 19 }, function(response) {
    if(response) {
        alert('Sent!');
   }
});
// { name: 'Roman', age: 19 } => name=Roman&age=19 
// use function ajax.encodeData(data); in order to encode into string.

//by the way, sometimes it will be uselful to post data by ajax.get();

ajax.get('test.php' + '?' + encodeData({ user: 'zhak55', id: 1 }), function(r) {
    if(r) {
        document.getElementById('test').innerHTML = r;
    }
});
</script>
 </head>
 <body>
     <div id="test"></div>   
 </body>
   </html>
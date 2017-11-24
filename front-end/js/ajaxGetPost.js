function post_ajax_data(url,encodedata,success)
{
$.ajax({
type:"POST",
url:url,
data:encodedata,
success:function(data){
success.call(this, data);
}/*,
error:function(data){
alert("Error In Connecting");
}*/
});
}

function ajax_data(type, url, success)
{
$.ajax({
type:"GET",
url:url,
dataType:"json",
restful:true,
cache:false,
timeout:20000,
async:true,
beforeSend :function(data) { },
success:function(data){
success.call(this, data);
}/*,
error:function(data){
alert("Error In Connecting");
}*/
});
}

function dummy()
{
$.ajax({
error:function(data){
alert("Error In Connecting");
}
});
}

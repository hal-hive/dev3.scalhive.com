$("#contact-form").submit(function(t){t.preventDefault(),$.ajax({url:"/submit-form.php",type:"post",data:$("#contact-form").serialize(),success:function(){$("#contact-form")[0].reset(),alert("Message sent successfully!!")}})});
<html>
<body>
<!--<?php var_dump($_POST); ?><br><br><br><br><br><br>-->
Welcome <?php echo $_POST['form']['fName']; echo $_POST['form']['lName']; ?><br>
You are registering for: <?php echo $_POST['form']['program']; ?><br>
Your email address is: <?php echo $_POST['form']['email']; ?><br>
Your Gender: <?php echo $_POST['form']['gender']; ?><br>
Your Address:<br>
<?php echo $_POST['form']['address1']; ?><br>
<?php echo $_POST['form']['address2']; ?><br>
<?php echo $_POST['form']['city']; ?> 
<?php echo $_POST['form']['state']; ?> 
<?php echo $_POST['form']['zip']; ?><br>
Message is: <?php echo $_POST['form']['message']; ?><br>
Are You Attending?: <?php echo $_POST['form']['registerAs']; ?><br>
On Date: <?php echo $_POST['form']['date']['month']; ?>/<?php echo $_POST['form']['date']['day']; ?>/<?php echo $_POST['form']['date']['year']; ?><br>
Start Time: <?php echo $_POST['form']['startTime']['hour']; ?>:<?php echo $_POST['form']['startTime']['minute']; ?><br>
End Time: <?php echo $_POST['form']['endTime']['hour']; ?>:<?php echo $_POST['form']['endTime']['minute']; ?><br>

<?php
function uploadRegistrationInfo($data)
    {
	    $query = sprintf("INSERT INTO %s (program,fName,lName,gender,dob,addr1,addr2,city,state,zip,email,phone,regType,eventdate,sTime,eTime,message,regdate) VALUES ('%s', '%s', '%s', '%c', %s, %s, '%s', '%s' ,'%s', '%d', '%s','%s','%c','%s','%s','%s','%s','%s')", 
	    'bolt_custom_registration',
	    $data['form']['program'],
	    $data['form']['fName'],
	    $data['form']['lName'],
	    $data['form']['gender'],
	    $data['form']['dob'],
	    $data['form']['address1'],
	    $data['form']['address2'],
	    $data['form']['city'],
	    $data['form']['state'],
	    $data['form']['zip'],
	    $data['form']['email'],
	    $data['form']['phone'],
	    $data['form']['registerAs'],
	    $data['form']['date'],
	    $data['form']['startTime'],
	    $data['form']['endTime'],
	    $data['form']['message'],
	    today
	    );
                    
        $this->app['db']->executeQuery($query);

    }

uploadRegistrationInfo($_POST);
?>
</body>
</html>
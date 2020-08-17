<template>
  <div class="contactcontainer">
		<h2>Send e-mail to Stephanie</h2>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		    <p>Your Name:<br> <input type="text" name="name" maxlength="100" size="40"></P>
		    <p>Your e-mail Address: <br><input type="email" name="from_email" maxlength="100" size="40"></P>
		    <p>Subject:<br><input type="text" name="subject" maxlength="100" size="40"></P>
		    <p>Your Message:<br><textarea name="message" rows="5" cols="65"></textarea></P>
		    <p><button name="submit" type="submit">Send Mail</button></p>
		  </form>
		</div>  
</template>

<script>

export default {
  data () {
    return {

    }
  },
  methods: {

  },
  created() {

  },
}
</script>

<style lang="scss" scoped>
  .contactcontainer {
    margin-top:25px;
    padding:25px 25px 25px 100px;
    color:#fff;
    background-color:#036;
    form {
      margin-left:100px;
      margin-top:25px;
    }
  }
</style>

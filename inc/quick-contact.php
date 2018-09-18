<form name="course" id="quick-contact-form" action='../quick.php' method='post' onSubmit="return alert('Thankyou for your enquiry. We will get back to as soon as possible.');">
<section id="quick-contact">
  <ul class="clear">
    <li>
      <input type="text" value="Name" id="name" name="name" onblur="blurtext('name','Name')" onfocus="focustext('name','Name')" required>
    </li>
    <li>
      <input type="text" value="Email" id="email" name="email" onblur="blurtext('email','Email')" onfocus="focustext('email','Email')" required>
    </li>
    <li>
      <input type="text" value="Phone" id="phone" name="phone" onblur="blurtext('phone','Phone')" onfocus="focustext('phone','Phone')" required>
    </li>
    <li>
      <select style="width:200px;" id="course" name="course" class="center">
        <option value="Basics of Acting">Basics of Acting</option>
            <option value="Basics of Singing">Basics of Singing</option>
            <option value="Basics of Modelling">Basics of Modelling</option>
            <option value="Basics of Dance">Basics of Dance</option>
            <option value="Basics of Photography">Basics of Photography</option>
            <option value="Basics of Guitar">Basics of Guitar</option>
            <option value="Advanced Singing Course">Advanced Singing Course</option>
            <option value="Advanced Dancing Course">Advanced Dancing Course</option>
      </select>
    </li>
    <li>
      <input type="submit" value="Quick Contact">
    </li>
  </ul>
</section>
</form>
<script>function focustext(val,txtvalue){if (document.getElementById(val).value == txtvalue) { document.getElementById(val).value = '';}}
function blurtext(val,txtvalue){if (document.getElementById(val).value == '') {document.getElementById(val).value = txtvalue;}}
// sort list
var my_options = $(".center option");
my_options.sort(function(a,b) {
    if (a.text > b.text) return 1;
    else if (a.text < b.text) return -1;
    else return 0
})
$(".center").empty().append(my_options);
$(".center").prepend("<option selected='' disabled=''>Select a Course</option>");
</script>
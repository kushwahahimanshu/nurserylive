<!-- latest jquery-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('js/slick.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('js/popper.min.js')}}"></script>

    <!-- Timer js-->
    <script src="{{asset('js/menu.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('js/bootstrap-notify.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('js/slider-animat-three.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script>
var wage = document.getElementById("search");
wage.addEventListener("keydown", function (e) {
    // searchKeyword=e.target.value
    if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
        validate();
    }
});
function validate() {
    //console.log(wage.value);
     window.location.href = "{{url('search') }}" + '/' + wage.value;
     //console.log("{{url('search/') }}" + encodeURI(wage.value))
}
    </script>
    <script>
var mob = document.getElementById("searchm");
mob.addEventListener("keydown", function (e) {
    // searchKeyword=e.target.value
    if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
        validatem();
    }
});
function validatem() {
    //console.log(mob.value);
     window.location.href = "{{url('search') }}" + '/' + mob.value;
     //console.log("{{url('search/') }}" + encodeURI(mob.value))
}
    </script>
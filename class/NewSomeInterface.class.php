<?php
	interface Some {
		function SomeFunc ();
	}


class NewSomeInterface implements Some {
		function SomeFunc(){
			echo "Some text";
		}
}
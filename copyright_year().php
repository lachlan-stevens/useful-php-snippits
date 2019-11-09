function copyright_year($year) {
  # if $year is this or a future year, we will just return $year.
	if(intval($year) >= date('Y')) {return(intval($year));}
  # if $year is less than this year, we'll create and return string formatted as "<$year>-<current-year".
  # for example if $year is 2017 and it's currently 2019, the returned string will be "2017-2019".
	else {return(intval($year) . '-' . date('Y'));}
}

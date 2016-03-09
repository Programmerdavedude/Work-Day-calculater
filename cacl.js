function workday_count(start,end) {
  var first = start.clone().endOf('week'); // end of first week
  var last = end.clone().startOf('week'); // start of last week
  var days = last.diff(first,'days') * 5 / 7; // this will always multiply of 7
  var wfirst = first.day() - start.day(); // check first week
  if(start.day() == 0) --wfirst; // -1 if start with sunday 
  var wlast = end.day() - last.day(); // check last week
  if(end.day() == 6) --wlast; // -1 if end with saturday
  alert(wfirst + days + wlast); // get the total
}

/** Function to display a Calendar based on javascript. **/
function calendar() {
  // Get the current date parameters.
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth();
  var year = date.getFullYear();
  
  var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var monthDays = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
  var weekDay = new Array('Mo','Tu','We','Th','Fr','Sa','Su');
  var days_in_this_month = monthDays[month];

  // Create the basic Calendar structure.
  var calendar_html = '<table class="calendarTable" >';
  calendar_html += '<tr><td class="monthHead" colspan="7">' + months[month] + ' ' + year + '</td></tr>';
  calendar_html += '<tr>';
  var first_week_day = new Date(year, month, 1).getDay();
  //alert(month);
  for(week_day= 0; week_day < 7; week_day++) {
    calendar_html += '<td class="weekDay">' + weekDay[week_day] + '</td>';
  }
  calendar_html += '</tr><tr>';

  // Fill the first week of the month with the appropriate number of blanks.
  for(week_day = 0; week_day < first_week_day-1; week_day++) {
    calendar_html += '<td> </td>';
  }
  week_day = first_week_day-1;
  for(day_counter = 1; day_counter <= days_in_this_month; day_counter++) {
    week_day %= 7;
    if(week_day == 0)
      calendar_html += '</tr><tr>';
    // Do something different for the current day.
    if(day == day_counter) {
      calendar_html += '<td class="currentDay">' + day_counter + '</td>';
    } else {
      calendar_html += '<td class="monthDay"> ' + day_counter + ' </td>';
 }
    week_day++;
  }
  calendar_html += '</tr>';
  calendar_html += '</table>';
  // Display the calendar.
  document.write(calendar_html);
}

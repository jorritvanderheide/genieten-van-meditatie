// Calendar
document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    // initialView: "listWeek",
    events: [
      {
        title: "Osho meditatieavond",
        start: "2022-02-01T19:00",
        end: "2022-02-01T20:30",
      },
    ],
  });
  calendar.render();
});

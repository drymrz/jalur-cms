
 let date = new Date();

  let familyEvents = {
    id: 1,
    events: [
      
      {
        id: "1",
        start: moment().format('YYYY-MM-17') + "T08:30:00",
        title: "Family Events",
      },
      {
        id: "2",
        start: moment().format('YYYY-MM-DD') + "T10:30:00",
        end: moment().format('YYYY-MM-DD') + "T12:00:00",
        title: "Dinner with Family",
      },
    ],
    className: "primary",
    textColor: "#5F63F2",
  };

  let productLaunch = {
    id: 2,
    events: [
      {
        id: "1",
        start: moment().format('YYYY-MM-20') + "T01:00:00",
        title: "Product Lunch",
      },
    ],
    className: "secondary",
    textColor: "#FF69A5",
  };

  let teamMeeting = {
    id: 3,
    events: [
      {
        id: "1",
        start: moment().format('YYYY-MM-DD') + "T18:30:00",
        title: "Team Meeting",
      },
    ],
    className: "success",
    textColor: "#20C997",
  };

  let projectUpdate = {
    id: 4,
    events: [
      {
        id: "1",
        start: moment().format('YYYY-MM-25') + "T11:00:00",
        title: "Team Meeting",
      },
      {
        id: "2",
        start: moment().format('YYYY-MM-DD') + "T07:00:00",
        end: moment().format('YYYY-MM-DD') + "T08:30:00",
        title: "HexaDash Calendar App",
      },
    ],
    className: "warning",
    textColor: "#FA8B0C",
  };

  document.addEventListener("DOMContentLoaded", function () {
    var fullCalendar = document.getElementById("full-calendar");
    if (fullCalendar) {
      var calendar = new FullCalendar.Calendar(fullCalendar, {
        headerToolbar: {
          left: "today,prev,title,next",
          right: "timeGridDay,timeGridWeek,dayGridMonth,listMonth",
        },
        views: {
          listMonth: {
            buttonText: "Schedule",
            titleFormat: { month: "short", weekday: "short" },
          }
        },
        listDayFormat: true,
        allDaySlot: false,
        editable: true,
        eventSources: [familyEvents, productLaunch, teamMeeting, projectUpdate],
        contentHeight: 800,
        initialView: "dayGridMonth",
        eventDidMount: function (view) {
          document.querySelectorAll(".fc-list-day").forEach(function (item) {});
        },
        eventClick: function (infoEvent) {
          console.log(infoEvent.event.title);
          let infoModal = document.getElementById('e-info-modal');
          infoModal.modal("show");
          console.log(infoModal.find(".e-info-title"));
          infoModal.find(".e-info-title").text(infoEvent.event.title);
        },
      });

      calendar.render();
      const listMonthButton = document.querySelector(".fc-button-group .fc-listMonth-button");
      if (listMonthButton) {
        const icon = document.createElement("i");
        icon.className = "uil uil-list-ul";
        listMonthButton.insertBefore(icon, listMonthButton.firstChild);
      }
    }
  });
  

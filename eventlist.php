<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js"></script>


<div class="container">
    <div class="row">
    <h3 class="add-transport">Event <span style="color:#e99803"> List</span></h3>
        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- Popup for Event Details -->
<div id="CalendarPopup">
    <div class="content">
        <div class="headerOne">
            <h2 class="EventDetails">Event Details</h2>
            <button id="closeCalendarPopup" class="closeCalendarPopup"><i class="fa-solid fa-x"></i></button>
        </div>
        <div id="eventDetails" class="eventDetailsContent"></div>
        <button id="addEventButton" class="addEventButton"><i class="fa-solid fa-plus"></i></button>
        <button id="editEventButton" class="editEventButton"><i class="fa-solid fa-pen"></i></button>
        <button id="deleteEventButton" class="deleteEventButton"><i class="fa-solid fa-trash"></i></button>
    </div>
</div>

<!-- Popup for Adding Events -->
<div id="AddEventPopup">
    <div class="content">
        <div class="headerOne">
            <h2 class="EventDetails">Add New Event</h2>
            <button id="closeAddEventPopup" class="closeCalendarPopup"><i class="fa-solid fa-x"></i></button>
        </div>
        <form id="eventForm">
            <label for="eventTitle">Title:</label>
            <input class="form-control form-control-lg" type="text" id="eventTitle" name="title" required>

            <label for="eventDescription">Description:</label>
            <input class="form-control form-control-lg" type="text" id="eventDescription" name="description">

            <label for="eventLocation">Location:</label>
            <input class="form-control form-control-lg" type="text" id="eventLocation" name="location">

            <label for="eventCategory">Category:</label>
            <input class="form-control form-control-lg" type="text" id="eventCategory" name="category">

            <label for="eventAttendees">Attendees (comma separated):</label>
            <input class="form-control form-control-lg" type="text" id="eventAttendees" name="attendees">

            <label for="eventStartDate">Start Date:</label>
            <input class="form-contro form-control-lg" type="date" id="eventStartDate" name="startDate" required>

            <label for="eventStartTime">Start Time:</label>
            <input class="form-control form-control-lg" type="time" id="eventStartTime" name="startTime" required>

            <label for="eventEndDate">End Date:</label>
            <input class="form-control form-control-lg" type="date" id="eventEndDate" name="endDate">

            <label for="eventEndTime">End Time:</label>
            <input class="form-control form-control-lg" type="time" id="eventEndTime" name="endTime">

            <button type="submit" class="btn btn-success mt-3">Add Event</button>
        </form>
    </div>
</div>


<script>
    $(document).ready(function () {
        let selectedEvent;
        let selectedDate;

        // Initialize the calendar
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultView: 'month', // Set the default view to Month
            editable: true,
            events: [
                // Sample events
                {
                    id: 1,
                    title: 'Sample Event 1',
                    start: '2024-09-05T10:00:00',
                    end: '2024-09-05T12:00:00',
                    description: 'This is a sample event.',
                    location: 'New York',
                    category: 'Conference',
                    attendees: ['John Doe', 'Jane Smith']
                },
                {
                    id: 2,
                    title: 'Sample Event 2',
                    start: '2024-09-10T09:00:00',
                    end: '2024-09-10T11:00:00',
                    description: 'This is another sample event.',
                    location: 'Los Angeles',
                    category: 'Meeting',
                    attendees: ['Alice Brown', 'Bob White']
                }
            ],
            dayClick: function (date) {
                selectedDate = date.format('YYYY-MM-DD');
                showPopup();
                $('#eventDetails').hide();
                $('#addEventButton').show();
            },
            eventClick: function (event) {
                showPopup();
                selectedEvent = event;
                const eventDetailsHTML = `
                <p><strong>Title:</strong> ${event.title}</p>
                <p><strong>Description:</strong> ${event.description || 'No description'}</p>
                <p><strong>Location:</strong> ${event.location || 'No location'}</p>
                <p><strong>Category:</strong> ${event.category || 'No category'}</p>
                <p><strong>Attendees:</strong> ${event.attendees ? event.attendees.join(', ') : 'No attendees'}</p>
                <p><strong>Start:</strong> ${moment(event.start).format('YYYY-MM-DD HH:mm')}</p>
                <p><strong>End:</strong> ${event.end ? moment(event.end).format('YYYY-MM-DD HH:mm') : 'No end time'}</p>
            `;
                $('#eventDetails').html(eventDetailsHTML).show();
                $('#addEventButton').hide();
            }
        });

        // Popup management functions
        function showPopup() {
            $('#CalendarPopup').css('display', 'flex');
        }

        function hidePopup() {
            $('#CalendarPopup').css('display', 'none');
        }

        function showAddEventPopup() {
            $('#AddEventPopup').css('display', 'flex');
        }

        function hideAddEventPopup() {
            $('#AddEventPopup').css('display', 'none');
        }

        // Close popup buttons
        $('#closeCalendarPopup').on('click', hidePopup);
        $('#closeAddEventPopup').on('click', hideAddEventPopup);

        // Add event button (new event)
        $('#addEventButton').on('click', function () {
            hidePopup();
            showAddEventPopup();

            // Clear form for new event
            $('#eventForm')[0].reset();
            selectedEvent = null; // Clear selected event
        });

        // Edit event button
        $('#editEventButton').on('click', function () {
            if (selectedEvent) {
                hidePopup();
                showAddEventPopup();

                // Populate form with event data
                $('#eventTitle').val(selectedEvent.title);
                $('#eventDescription').val(selectedEvent.description || '');
                $('#eventLocation').val(selectedEvent.location || '');
                $('#eventCategory').val(selectedEvent.category || '');
                $('#eventAttendees').val(selectedEvent.attendees ? selectedEvent.attendees.join(', ') : '');
                $('#eventStartDate').val(moment(selectedEvent.start).format('YYYY-MM-DD'));
                $('#eventStartTime').val(moment(selectedEvent.start).format('HH:mm'));
                $('#eventEndDate').val(selectedEvent.end ? moment(selectedEvent.end).format('YYYY-MM-DD') : '');
                $('#eventEndTime').val(selectedEvent.end ? moment(selectedEvent.end).format('HH:mm') : '');
            }
        });

        // Delete event button
        $('#deleteEventButton').on('click', function () {
            if (selectedEvent) {
                const confirmDelete = confirm('Are you sure you want to delete this event?');
                if (confirmDelete) {
                    $('#calendar').fullCalendar('removeEvents', selectedEvent._id);
                    hidePopup();
                }
            }
        });

        // Form submission to add or edit event
        $('#eventForm').on('submit', function (e) {
            e.preventDefault();

            const startDate = $('#eventStartDate').val();
            const startTime = $('#eventStartTime').val();
            const endDate = $('#eventEndDate').val();
            const endTime = $('#eventEndTime').val();
            const startDateTime = `${startDate}T${startTime}`;
            const endDateTime = endDate && endTime ? `${endDate}T${endTime}` : null;

            const eventData = {
                title: $('#eventTitle').val(),
                start: startDateTime,
                end: endDateTime,
                description: $('#eventDescription').val(),
                location: $('#eventLocation').val(),
                category: $('#eventCategory').val(),
                attendees: $('#eventAttendees').val().split(',')
            };

            if (selectedEvent) {
                // Update existing event
                selectedEvent.title = eventData.title;
                selectedEvent.description = eventData.description;
                selectedEvent.location = eventData.location;
                selectedEvent.category = eventData.category;
                selectedEvent.attendees = eventData.attendees;
                selectedEvent.start = eventData.start;
                selectedEvent.end = eventData.end;
                $('#calendar').fullCalendar('updateEvent', selectedEvent);
            } else {
                // Add new event
                $('#calendar').fullCalendar('renderEvent', eventData, true);
            }

            hideAddEventPopup();
            $('#eventForm')[0].reset();
        });
    });
</script>


<?php include 'footer.php'; ?>
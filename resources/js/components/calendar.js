/**
 * FullCalendar plugin initialization (Schedule)
 * @requires https://github.com/fullcalendar/fullcalendar
 */

import {Calendar} from "@fullcalendar/core";
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import listPlugin from '@fullcalendar/list'

export default (() => {
    // forEach function
    const forEach = (array, callback, scope) => {
        for (let i = 0; i < array.length; i++) {
            callback.call(scope, i, array[i]) // passes back stuff we need
        }
    }

    // Calendar initialisation
    const calendars = document.querySelectorAll('.calendar')
    forEach(calendars, (index, value) => {
        let userOptions
        if (value.dataset.calendarOptions != undefined)
            userOptions = JSON.parse(value.dataset.calendarOptions)
        let options = {
            plugins: [dayGridPlugin, timeGridPlugin, listPlugin,],
            themeSystem: 'bootstrap5',
            ...userOptions,
        }

        /* eslint-disable no-undef */
        const calendarInstance = new Calendar(value, options)
        /* eslint-enable no-undef */
        calendarInstance.render()
    })
})()

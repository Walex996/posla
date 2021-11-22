
const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
]

const monthNamesShort = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
]


export const MonthName = (month) => {
    const monthIndex = month - 1;   // -1 due to array indexing starting at 0
    // console.log("month Name format", month);
    // console.log("monthNames[monthIndex]", monthNames[monthIndex]);
    // console.log("");
    return (monthNames[monthIndex]);
}


export const DateTimeFormat = (datetime) => {

    if ((typeof datetime !== undefined) && (datetime !== undefined) && (datetime !== null)) {

        let d = new Date(datetime),
            month = "" + d.getMonth(),
            day = "" + d.getDate(),
            year = "" + d.getFullYear(),
            hour = "" + d.getHours(),
            hour12 = 0,
            am_pm = "",
            min = "" + d.getMinutes(),
            sec = "" + d.getSeconds();

        if (day.length < 2)
            day = '0' + day;

        if (hour > 12) {
            hour12 = (hour - 12);
            am_pm = "PM";
        }
        else {
            hour12 = hour;
            am_pm = "AM";
        }

        if (min.length < 2)
            min = '0' + min;

        if (sec.length < 2)
            sec = '0' + sec;

        // return [year, month, day].join('-');
        return [monthNames[month] + " " + day + ", " + year + " at " + hour12 + ":" + min + " " + am_pm];

    }
};


export const DateTimeMiniFormat = (datetime) => {

    if ((typeof datetime !== undefined) && (datetime !== undefined) && (datetime !== null)) {

        let d = new Date(datetime),
            month = "" + d.getMonth(),
            day = "" + d.getDate(),
            // year = "" + d.getFullYear(),
            hour = "" + d.getHours(),
            hour12 = 0,
            am_pm = "",
            min = "" + d.getMinutes(),
            sec = "" + d.getSeconds();

        if (day.length < 2)
            day = '0' + day;

        if (hour > 12) {
            hour12 = (hour - 12);
            am_pm = "PM";
        }
        else {
            hour12 = hour;
            am_pm = "AM";
        }

        if (min.length < 2)
            min = '0' + min;

        if (sec.length < 2)
            sec = '0' + sec;

        // return [year, month, day].join('-');
        return [day + " " + monthNamesShort[month] + ". " + hour12 + ":" + min + " " + am_pm];

    }
};


export const DateFormat = (date) => {
    if ((typeof date !== undefined) && (date !== undefined) && (date !== null)) {

        let d = new Date(date),
            month = '' + d.getMonth(),
            day = '' + d.getDate(),
            year = d.getFullYear();

        // if (month.length < 2) 
        // month = '0' + month;

        if (day.length < 2)
            day = '0' + day;

        // return [year, month, day].join('-');
        return [monthNames[month] + " " + day + ", " + year];

    }
};


export const TimeFormat = (time) => {

    if ((typeof time !== undefined) && (time !== undefined) && (time !== null)) {

        let d = new Date(time),
            hour = "" + d.getHours(),
            hour12 = 0,
            am_pm = "",
            min = "" + d.getMinutes(),
            sec = "" + d.getSeconds();

        if (hour > 12) {
            hour12 = (hour - 12);
            am_pm = "PM";
        }
        else {
            hour12 = hour;
            am_pm = "AM";
        }

        if (min.length < 2)
            min = '0' + min;

        if (sec.length < 2)
            sec = '0' + sec;

        // return [year, month, day].join('-');
        return [hour12 + ":" + min + " " + am_pm];

    }

};

export default DateFormat;
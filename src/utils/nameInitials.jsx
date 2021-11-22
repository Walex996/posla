/*
export const nameInitials = (fullName) => {
    
    const names = fullName.split(' ');
    var initials = names[0].substring(0, 1).toUpperCase();
    
    if (names.length > 1) {
        initials += names[names.length - 1].substring(0, 1).toUpperCase();
    }

    return initials;

};
*/

export const nameInitials = (firstName, lastName) => {   

    if (((firstName !== undefined) && (lastName !== undefined)) && ((firstName !== null) && (lastName !== null))){
        var initials = (firstName.substring(0, 1) + "" + lastName.substring(0, 1)).toUpperCase();
        return initials;
    }
    else{
        return null;
    }
    
};

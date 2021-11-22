
export const NumberFormat = (number, divider = ',', decimal = '.') => {
    const allowedInput = /^[0-9,.]*$/;
    if (number !== "") {
        if (allowedInput.test(number)) {
            let numberOnly = NumberFormatRemove(number);
            numberOnly += '';
            numberOnly = numberOnly.replace('.', '');
            numberOnly = numberOnly - 0;
            numberOnly = numberOnly.toString();

            if (numberOnly.length === 1) {
                return ("0" + decimal + "0" + numberOnly);
            }
            else if (numberOnly.length === 2) {
                return ("0" + decimal + numberOnly);
            }
            else {
                let x1 = numberOnly.substr(0, (numberOnly.length - 2));
                let x2 = numberOnly.substr(numberOnly.length - 2);

                let rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + divider + '$2');
                }
                return (x1 + decimal + x2);
            }
        }
        else {
            return ("");
        }
    }
    else {
        return ("0.00");
    }
};


export const NumberFormatRemove = (number) => {
    const numberOnly = number.toString().replace(/,/g, '');

    /*
    let numberOnly = "";
    if (number > Math.floor(number)) {
        numberOnly = number.toString().replace(/,/g, '');
    }
    else {
        numberOnly = parseFloat(number).toFixed(2).toString().replace(/,/g, '');
    }
    */

    // const numberOnly = parseFloat(number.toString().replace(/,/g, ''));
    // const numberOnly = parseFloat(number.toString().replace(/,/g, '')).toFixed(2);
    // const numberOnly = parseFloat(number).toFixed(2).toString().replace(/,/g, '');
    return (numberOnly);    //string
};


export default NumberFormat;
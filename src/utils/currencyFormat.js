
export const CurrencyFormat = (amount) => {

  if (!isNaN(amount)){

    const formatter = new Intl.NumberFormat('en-US', {
      // style: 'currency',
      // currency: 'USD',
      // currency: '₦',
    });
  
    return ("₦"+formatter.format(amount)); /* ₦2,500.00 */
    
  }

};

export default CurrencyFormat;
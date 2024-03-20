function fisherYates ( array ){
    /*
    Function to sort according to Fisher-Yates algorithm
    This function DOES AFFECT the original array.
    Params: array.
    Returns: Nothing.
    Result: It reorganizes an array randomly.
    */
    for (let i = array.length -1; i > 0; i--) {

        const j = Math.floor(Math.random()*(i+1)); //Random number to get

        [array[i], array[j]] = [array[j], array[i]]; // Swipt the items
    }
}

test = [1,2,3,4,5,6,8,9,10]

console.log( test )

fisherYates( test )

console.log( test )
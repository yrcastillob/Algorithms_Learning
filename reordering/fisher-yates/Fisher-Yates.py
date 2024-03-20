import random ## It requires random to be able to use it

def fisherYates(array):

    n = len(array) ## Array length

    for i in range(n - 1, 0, -1): ## range(start, stop, step) Create a range

        j = random.randint(0, i) ## Select a random number within the limit of 0 and i, it use randint() to generate a int random number

        array[i], array[j] = array[j], array[i]# It switch the position of each element withing the array

## Example
myList = [1, 2, 3, 4, 5]

print("Original Array:", myList)

fisherYates(myList)

print("Result array", myList)

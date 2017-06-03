/*We define the middle of the array arr as follows:
-if arr contains an odd number of elements, its middle is the element whose index number is the same when counting from the beginning of the array and from its end;
-if arr contains an even number of elements, its middle is the sum of the two elements whose index numbers when counting from the beginning and from the end of the array differ by one.
Given array arr, your task is to find its middle, and, if it consists of two elements, replace those elements with the value of middle. Return the resulting array as the answer.*/
import java.util.Arrays;
public class replaceMiddle {
	
	public static void main(String[] args) {
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{7,2,2,5,10,7}))); //expected output = [7, 2, 7, 10, 7]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{-5, -5, 10}))); //expected output = [-5, -5, 10]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{45, 23, 12, 33, 12, 453, -234, -45}))); //expected output = [45, 23, 12, 45, 453, -234, -45]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{2, 8}))); //expected output = [10]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{-12, 34, 40, -5, -12, 4, 0, 0, -12}))); //expected output = [-12, 34, 40, -5, -12, 4, 0, 0, -12]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{9, 0, 15, 9}))); //expected output = [9, 15, 9]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{-6, 6, -6}))); //expected output = [-6, 6, -6]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{26, 26, -17}))); //expected output = [26, 26, -17]
		System.out.println(Arrays.toString(new replaceMiddle().replace(new int[]{-7, 5, 5, 10}))); //expected output = [-7, 10, 10]
	}

	int[] replace(int[] arr) {
	    
	    int len = arr.length;
	    int j = 0;
	    int mid = arr[len/2] + arr[(len/2)-1];
	    int[] arr2 = new int[len-1];
	    
	    if (len%2 == 1) //if odd number of elements, no change needed, return array
	        return arr;
	    
	    if (len == 2) { //if only two elements in array, add them and return
	        int[] arr3 = {arr[0] + arr[1]};
	        return arr3;
	    }
	    
	   for (int i=0; i<len; i++)
	        if (i==len/2 || i==(len/2)-1) { //sets new middle element
	            arr2[arr2.length/2] = mid;
	            j = (len/2); //keeps index in correct spot
	        }else {
	            arr2[j] = arr[i]; //copies every other element
	            j++;
	        }
	    
	    return arr2;
	    
	}

}
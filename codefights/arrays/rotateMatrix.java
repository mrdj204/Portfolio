/*You are given an n x n 2D matrix that represents an image. Rotate the image by 90 degrees (clockwise).
Try to solve this task in-place (with O(1) additional memory).*/

import java.util.Arrays;

public class rotateMatrix {
	
	public static void main(String[] args) {
		int[][] test = new int[3][3];
		int fill = 1;
		for (int i=0;i<3;i++)
	        for (int j=0;j<3;j++)
	        	test[i][j] = fill++;
		/*Expected Output: [[7,4,1],
							[8,5,2],
							[9,6,3]]*/
		System.out.println(Arrays.deepToString(new rotateMatrix().rotate(test)));
	}

	int[][] rotate(int[][] a) {

	    int length = a.length;
	    
	    int[][] output = new int[length][length];
	    
	    int x = 0;
	    int y = length-1;

	    for (int i=0;i<length;i++) {
	        for (int j=0;j<length;j++) {
	    
	            output[i][j] = a[y][x];
	            
	            if (y==0) { //decrement y to 0; then increment x once and reset y. 
	                x++;
	                y = length-1;
	            }else
	                y--;
	        
	        }
	    }
	    
	    return output;
	}

}
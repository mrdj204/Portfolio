//Given a binary tree t, determine whether it is symmetric around its center, i.e. each side mirrors the other.

//Tree class was given
class Tree<T> {
    Tree(T x) {
      value = x;
    }
    T value;
    Tree<T> left;
	Tree<T> right;
}

public class isTreeSymmetric {
	
	public static void main(String[] args) {
		Tree<Integer> t = new Tree<Integer>(1);
		t.left = new Tree<Integer>(2);
		t.left.left = new Tree<Integer>(3);
		t.left.right = new Tree<Integer>(4);
		t.right = new Tree<Integer>(2);
		t.right.left = new Tree<Integer>(4);
		t.right.right = new Tree<Integer>(3);
		System.out.println(new isTreeSymmetric().isSymmetric(t)); //exptected output = true
	}

	boolean isSymmetric(Tree<Integer> t) {
	    if (t == null)
	        return true;
	    return isSymmetric(t.left, t.right);
	}

	boolean isSymmetric(Tree<Integer> l, Tree<Integer> r) {
	   
	    if (l == null && r == null)
	        return true;
	    
	    if (l == null || r == null)
	        return false;
	    
	    if (l.value.equals(r.value))
	        return (isSymmetric(l.left, r.right) && isSymmetric(l.right, r.left));
	    else
	        return false;
    
}

}
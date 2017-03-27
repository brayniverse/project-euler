public class ProblemTwo {
    public static void main(String args[]) {
        int sum = 0, x = 1, y = 2;

        while (x <= 4000000) {
            int z = x + y;

            x = y;
            y = z;

            if (x % 2 == 0) {
                sum += x;
            }
        }

        System.out.println(sum);
    }
}
# 📋Lab 01: Algorithm Complexity Analysis

This laboratory explores different algorithm complexities and measures their execution times.

## 📁Contents📁

- `main.py`: Python script implementing algorithms with different time complexities

## 🛠️Requirements🛠️

- Python 3.x
- Matplotlib library (`pip install matplotlib`)

## 🛠️📎Usage🛠️📎

1. Install the required dependencies:
   ```
   pip install matplotlib
   ```

2. Run the script and uncomment the algorithm you want to analyze:
   ```
   python main.py
   ```

## Implemented Algorithms

1. **Logarithmic complexity - O(log n)**
   - Algorithm divides n by 2 repeatedly until reaching 0
   - Tested with n values: 1, 10, 100, 1000, 10000, 100000, 1000000

2. **Simple Loop - O(n)**
   - Algorithm with a single loop executing n times
   - Tested with n values: 10^2, 10^3, 10^4, 10^5, 10^6

3. **If-then-else statements - O(n)**
   - Algorithm with conditional branches, both containing linear operations
   - Tested with n values: 1, 10, 100, 1000, 10000, 100000

4. **Nested Loops - O(n²)**
   - Algorithm with two nested loops, each executing n times
   - Tested with n values: 100, 400, 600, 800, 1000, 1100

5. **Consecutive statements - O(n + n²) = O(n²)**
   - Algorithm combining a simple loop and nested loops
   - Tested with n values: 100, 400, 600, 800, 1000, 1100

6. **Mystery Algorithms**
   - Three algorithms with unknown complexity to be analyzed

## Analysis Process

For each algorithm:
1. Execution time is measured for different input sizes
2. Results are plotted to visualize how execution time scales with input size
3. Theoretical complexity is compared with the observed performance

## Student Information

- **Name:** Frank Sinca Orozco
- **Course:** Algorithms and Data Structures- TECSUP

## Prompt Engineering (Example for one algorithm)

### Prompt Entered
```
Determine the execution time for a simple loop combined with a nested loop of level 2. The values of n to be tested are: 100, 400, 600, 800, 1000, and 1100.```
```
### Prompt Analysis
1. The original prompt was specific about the algorithm's implementation but didn't includ1.	Objective: The goal is to measure the processing time of a loop structure that includes a simple loop and a nested loop (level 2).
2.	Input: A set of values for n (100, 400, 600, 800, 1000, 1100).
3.	Output: The execution time for each value of n.
4.	Assumptions: The loops are likely performing some basic operations (e.g., arithmetic or iteration), but the specific task inside the loops is not defined.


### Improved Prompt
```
Develop a Python script to measure the execution time of a nested loop structure consisting of a simple outer loop and a level 2 inner loop. The inner loop should perform a basic arithmetic operation, such as multiplying the loop indices (i * j). Test the script for the following values of n: 100, 400, 600, 800, 1000, and 1100. The goal is to analyze how the processing time scales with increasing values of n and to provide insights into the time complexity of the algorithm. Ensure the script outputs both the processing time and the result of the arithmetic operation for each n. Additionally, specify the Python version and environment in which the script should be executed
```



## Conclusions

1. The empirical results confirm the theoretical time complexity for each algorithm.
2. Logarithmic algorithms show excellent performance even with very large inputs.
3. Quadratic algorithms quickly become impractical as input size grows.
4. The choice of algorithm significantly impacts performance, especially for large datasets.
5. Understanding algorithm complexity is crucial for developing efficient software solutions.

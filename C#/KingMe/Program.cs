/*
 * Objective:  Create a game similar to BattleShips, where a user must guess the column and row in which my King has been placed (at random).
 * Author: Seth Creason
 * Date: 5.16.2017
 */
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static System.Console;

namespace KingMe
{
    class KingMe
    {

        static void Main(string[] args)
        {
            generateBoard();
        }

        static void generateBoard()
        {
            String[,] location = {
                                        { "~", "A",  "B",  "C",  "D",  "E" },
                                        { "1", " ", " ", " ", " ", " " },
                                        { "2", " ", " ", " ", " ", " " },
                                        { "3", " ", " ", " ", " ", " " },
                                        { "4", " ", " ", " ", " ", " " },
                                        { "5", " ", " ", " ", " ", " " },
                                   };

            bool firstTime = true;

            var rowCount = location.GetLength(0);
            var colCount = location.GetLength(1);
            for (int row1 = 0; row1 < rowCount; row1++)
            {
                for (int col = 0; col < colCount; col++)
                    Console.Write(String.Format(" {0}  ", location[row1, col]));
                Console.WriteLine();
            }
            
            Random rand = new Random();
            int kingColumn = rand.Next(1, 6);
            int kingRow = rand.Next(1, 6);
            location[kingColumn, kingRow] = "♔";

            game(firstTime, location, kingColumn, kingRow);
        }

        static void game(bool firstTime, String[,] location, int kingColumn, int kingRow)
        {
            int column;
            int row;
            String inputString;

            if (firstTime == false)
            {
                location[kingColumn, kingRow] = " "; //hide answer
                var rowCount = location.GetLength(0);
                var colCount = location.GetLength(1);
                for (int row1 = 0; row1 < rowCount; row1++)
                {
                    for (int col = 0; col < colCount; col++)
                        Console.Write(String.Format(" {0}  ", location[row1, col]));
                    Console.WriteLine();
                }
                location[kingColumn, kingRow] = "♔"; //return answer
            }

            Write("\nIn which column is the King? ");
            inputString = ReadLine();
            inputString = inputString.ToUpper();

            switch (inputString)
            {
                case "A":
                    inputString = "1";
                    break;
                case "B":
                    inputString = "2";
                    break;
                case "C":
                    inputString = "3";
                    break;
                case "D":
                    inputString = "4";
                    break;
                case "E":
                    inputString = "5";
                    break;
                default:
                    Console.WriteLine("Invalid choice.   Press any key to try again.");
                    ReadLine();
                    Console.Clear();
                    game(firstTime, location, kingColumn, kingRow);
                    break;
            }
            column = Convert.ToInt32(inputString);

            Write("\nIn which row is it? ");
            inputString = ReadLine();

            switch (inputString)
            {
                case "1":
                    inputString = "1";
                    break;
                case "2":
                    inputString = "2";
                    break;
                case "3":
                    inputString = "3";
                    break;
                case "4":
                    inputString = "4";
                    break;
                case "5":
                    inputString = "5";
                    break;
                default:
                    Console.WriteLine("Invalid choice.   Press any key to try again.");
                    ReadLine();
                    Console.Clear();
                    game(firstTime, location, kingColumn, kingRow);
                    break;
            }
            row = Convert.ToInt32(inputString);

            String guess = location[row, column];
            results(firstTime, row, column, location, guess, kingColumn, kingRow);
            ReadLine();
        }

        static void results(bool firstTime, int row, int column, String[,] location, String guess, int kingColumn, int kingRow)
        {
            if (guess == "♔")
            {
                Console.Clear();
                {
                    location[kingColumn, kingRow] = "K"; //show hit
                    var rowCount = location.GetLength(0);
                    var colCount = location.GetLength(1);
                    for (int row1 = 0; row1 < rowCount; row1++)
                    {
                        for (int col = 0; col < colCount; col++)
                            Console.Write(String.Format(" {0}  ", location[row1, col]));
                        Console.WriteLine();
                    }
                }
                WriteLine("\nCorrect! You've found the king!");
                WriteLine("\nPress any key to play again.");
                ReadLine();
                Console.Clear();
                generateBoard();
            }
            else
            {
                WriteLine("\nSorry, that is incorrect.  Press any key to try again.");
                ReadLine();
                Console.Clear();
                firstTime = false;
                location[row, column] = "m";
                game(firstTime, location, kingColumn, kingRow);
            }
        }
    }
}

/*
    * Objective:  Place a character in a maze at a randomized location, then navigate to the exit.
    * Author: Seth Creason
    * Date: 5.14.2017
    */
using System;

namespace maze
{
    class Program
    {

        static int pos1;
        static int pos2;

        static void Main(string[] args)
        {
            Console.WriteLine("You (@) are about to be placed into a maze.");
            Console.WriteLine("Your mission, should you choose to accept it,\nis to navigate your way to the exit (X).\n\nReady?  Y/N");

            ConsoleKeyInfo ready = Console.ReadKey();

            switch (ready.Key)
            {
                case ConsoleKey.Y:
                    String[,] maze = new String[24, 37] {
                        { "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#" },
                        { "#", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", " ", " ", " ", " ", "#", " ", "#" },
                        { "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#" },
                        { "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", "#", " ", "#", " ", " ", " ", "#", " ", "#" },
                        { "#", "#", "#", "#", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#" },
                        { "#", " ", " ", " ", "#", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", "#", " ", "#", " ", "#", " ", "#", " ", " ", " ", " ", " ", "#", " ", "#" },
                        { "#", " ", "#", " ", "#", "#", "#", "#", "#", "#", "#", " ", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#" },
                        { "#", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#" },
                        { "#", " ", "#", "#", "#", "#", "#", "#", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#" },
                        { "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#", " ", " ", " ", "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", "#", " ", " ", " ", " ", " ", "#" },
                        { "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", " ", "#", " ", "#", "#", "#", "#", "#", "#", "#" },
                        { "#", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", "#" },
                        { "#", "#", "#", "#", "#", "#", "#", " ", "#", " ", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#" },
                        { "#", " ", " ", " ", " ", " ", "#", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#", " ", " ", " ", "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#" },
                        { "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", "#", "#", "#", "#", "#", "#", " ", "#" },
                        { "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", "#", " ", "#", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", "#" },
                        { "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", " ", "#", "#", "#", "#", "#", "#", "#", " ", "#", " ", "#" },
                        { "#", " ", "#", " ", " ", " ", " ", " ", "#", " ", "#", " ", "#", " ", "#", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", "#", " ", " ", " ", "#" },
                        { "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#", "#", "#", "#", "#" },
                        { "#", " ", "#", " ", " ", " ", "#", " ", "#", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", "#", " ", " ", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#" },
                        { "#", " ", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", "#", "#", " ", "#", "#", "#", "#", "#", " ", "#", "#", "#", " ", "#", " ", "#", "#", "#", "#", "#", " ", "#", " ", "#" },
                        { "#", " ", "#", " ", " ", " ", " ", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", " ", " ", " ", " ", " ", " ", "#", " ", "#" },
                        { "#", " ", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#" },
                        { " ", "X", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " " },
                    };

                    Random random = new Random();
                    pos1 = random.Next(12, 23);
                    pos2 = random.Next(18, 37);
                    while (maze[pos1, pos2].Equals("#"))
                    {
                        pos1 = random.Next(12, 23);
                        pos2 = random.Next(18, 37);
                    }
                    maze[pos1, pos2] = "@";

                    Console.Clear();
                    navigate(maze);
                    break;

                case ConsoleKey.N:
                    Console.Clear();
                    Console.WriteLine("Oh. Alright then. Goodbye.");
                    System.Threading.Thread.Sleep(2000);
                    break;

                default:
                    Console.Clear();
                    Console.WriteLine("It seems you couldn't find the Y nor the N key.\n\nProbably couldn't find your way out of a maze, either. :)\n\nGoodbye.");
                    System.Threading.Thread.Sleep(5000);
                    break;
            }
        }

        static public void navigate(String[,] maze)
        {
            for (int row = 0; row < maze.GetLength(0); row++)
            {
                for (int column = 0; column < maze.GetLength(1); column++)
                {
                    Console.Write(maze[row, column]);
                }
                Console.WriteLine();
            }

            ConsoleKeyInfo keyInfo = Console.ReadKey();

            switch (keyInfo.Key)
            {
                case ConsoleKey.UpArrow:
                    if (maze[(pos1 - 1), pos2].Equals("#"))
                    {
                        Console.Clear();
                        navigate(maze);
                        break;
                    }
                    else
                    {
                        maze[pos1, pos2] = " ";
                        maze[(pos1 - 1), pos2] = "^";
                        pos1 = pos1 - 1;
                        Console.Clear();
                        navigate(maze);
                        break;
                    }

                case ConsoleKey.DownArrow:
                    if (maze[(pos1 + 1), pos2].Equals("X"))
                    {
                        Console.Clear();
                        winMessage();
                        break;
                    }
                    else if (maze[(pos1 + 1), pos2].Equals("#"))
                    {
                        Console.Clear();
                        navigate(maze);
                        break;
                    }
                    else
                    {
                        maze[pos1, pos2] = " ";
                        maze[(pos1 + 1), pos2] = "v";
                        pos1 = pos1 + 1;
                        Console.Clear();
                        navigate(maze);
                        break;
                    }

                case ConsoleKey.LeftArrow:
                    if (maze[pos1, (pos2 - 1)].Equals("#"))
                    {
                        Console.Clear();
                        navigate(maze);
                        break;
                    }
                    else
                    {
                        maze[pos1, pos2] = " ";
                        maze[pos1, (pos2 - 1)] = "<";
                        pos2 = pos2 - 1;
                        Console.Clear();
                        navigate(maze);
                        break;
                    }

                case ConsoleKey.RightArrow:
                    if (maze[pos1, (pos2 + 1)].Equals("#"))
                    {
                        Console.Clear();
                        navigate(maze);
                        break;
                    }
                    else
                    {
                        maze[pos1, pos2] = " ";
                        maze[pos1, (pos2 + 1)] = ">";
                        pos2 = pos2 + 1;
                        Console.Clear();
                        navigate(maze);
                        break;
                    }

                default:
                    break;

            }
                Console.ReadLine();
        }

        static void winMessage()
        {
            String message = "$$\\     $$\\  $$$$$$\\  $$\\   $$\\       $$\\      $$\\ $$$$$$\\ $$\\   $$\\ \n" +
                                "\\$$\\   $$  |$$  __$$\\ $$ |  $$ |      $$ | $\\  $$ |\\_$$  _|$$$\\  $$ |\n" +
                                " \\$$\\ $$  / $$ /  $$ |$$ |  $$ |      $$ |$$$\\ $$ |  $$ |  $$$$\\ $$ |\n" +
                                "  \\$$$$  /  $$ |  $$ |$$ |  $$ |      $$ $$ $$\\$$ |  $$ |  $$ $$\\$$ |\n" +
                                "   \\$$  /   $$ |  $$ |$$ |  $$ |      $$$$  _$$$$ |  $$ |  $$ \\$$$$ |\n" +
                                "    $$ |    $$ |  $$ |$$ |  $$ |      $$$  / \\$$$ |  $$ |  $$ |\\$$$ |\n" +
                                "    $$ |     $$$$$$  |\\$$$$$$  |      $$  /   \\$$ |$$$$$$\\ $$ | \\$$ |\n" +
                                "    \\__|     \\______/  \\______/       \\__/     \\__|\\______|\\__|  \\__|\n";

            String message2 = " __      __   ______   __    __        __       __  ______  __    __ \n" +
                                " |  \\    /  \\ /      \\ |  \\  |  \\      |  \\  _ |  \\|      \\|  \\  |  \\\n" +
                                "  \\$$\\  /  $$|  $$$$$$\\| $$  | $$      | $$ / \\ | $$ \\$$$$$$| $$\\ | $$\n" +
                                "   \\$$\\/  $$ | $$  | $$| $$  | $$      | $$/  $\\| $$  | $$  | $$$\\| $$\n" +
                                "    \\$$  $$  | $$  | $$| $$  | $$      | $$  $$$\\ $$  | $$  | $$$$\\ $$\n" +
                                "     \\$$$$   | $$  | $$| $$  | $$      | $$ $$\\$$\\$$  | $$  | $$\\$$ $$\n" +
                                "     | $$    | $$__/ $$| $$__/ $$      | $$$$  \\$$$$ _| $$_ | $$ \\$$$$\n" +
                                "     | $$     \\$$    $$ \\$$    $$      | $$$    \\$$$|   $$ \\| $$  \\$$$\n" +
                                "      \\$$      \\$$$$$$   \\$$$$$$        \\$$      \\$$ \\$$$$$$ \\$$   \\$$";

            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message);
            System.Threading.Thread.Sleep(250);
            Console.Clear();
            Console.WriteLine(message2);
            System.Threading.Thread.Sleep(250);
            Console.ReadLine();
        }
    }
}
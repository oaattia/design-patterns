<?php

interface Worker
{
	public function work();

	public function sleep();
}

class HumanWorker implements Worker
{
	public function work()
	{
		return "should work";
	}

	public function sleep()
	{
		return "should sleep";
	}
}

class RobotWorker implements Worker
{
	public function work()
	{

	}

	public function sleep()
	{
		// not right as the robot doen't need to sleep
	}
}

// To solve this we should seperate the interface to two interfaces
interface Workable
{

}

interface Sleepable
{

}

class RobotWorker implements Workable
{

}


class HumanWorker implements Workable, Sleepable
{

}

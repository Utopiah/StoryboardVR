# StoryboardVR : Converge faster to a shared understanding of a VR / 360 experience

Draw and show to your 360 video clients or your 3D artists your vision then iterate faster and more frequently thanks to their live comments all via the web, no installation required to create, share or review.

![Interface example with live collaboration](http://vatelier.benetou.fr/MyDemo/Storyboard/preview.jpg)

## How can I use it
- visit [the viewer](http://vatelier.benetou.fr/MyDemo/Storyboard/) , look around
- put the cursor on the green plane to refresh content, assuming you or somebody else saved a new image
- put the cursor on the red plane to jump to the next scene or room, assuming you made more than one
- edit the content using [the editor](http://vatelier.benetou.fr/MyDemo/Storyboard/Editor/) or [editor for 2nd room](http://vatelier.benetou.fr/MyDemo/Storyboard/EditorRoom2/)

## ToDo
- complete editor to do all 6 pannels
- handle N rooms, not just 2
- offer storyboard down, all rooms with all pannels
- URL per session to avoid overwrite (currently backing up per unix timestamp)
- first room as rewritable tutorial
- get notification on texture update then offer refresh
- option for automatic refresh e.g. once per second
- in VR drawing on canvas
- adding elements with position as texture on cubes
- use [buildSceneFromCanvas()](http://www.loganfamily.karoo.net/logo/index.html) and get a goemetry back e.g. draw a height map, get a world back

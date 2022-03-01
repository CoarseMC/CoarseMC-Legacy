<div align="center">
	<h2>CoarseMC Minecraft: Bedrock Edition Server Software</h2>
</div>
<div align=center>
	<a href=" https://github.com/CoarseMC/Server">
		<h1>
			<img src="https://github.com/CoarseMC/Server/blob/main/logo.png" alt="CoarseMC logo" title="CoarseMC" align="center" height="auto" width="100">
			<text>CoarseMC</text>
		</h1>
	</a>
</div>

<div align="center">
	<h2>Links</h2>
</div>

| Build |                                                                              Download                                                                              | Discord |
| :---: |:------------------------------------------------------------------------------------------------------------------------------------------------------------------:| :---: |
| [![Build Status](https://travis-ci.org/CoarseMC/Server.svg?branch=master)](https://travis-ci.org/github/CoarseMC/Server) |                   [![Download](https://img.shields.io/badge/Download-PHAR-orange)](https://github.com/CoarseMC/Server/releases)                   | [![Discord](https://img.shields.io/badge/Chat-On%20Discord-738BD7.svg?style=normal&colorB=7289da)](https://discord.gg/NzdB7a2EKK) |

- CoarseMC is a server software that backports new Minecraft: Bedrock Edition versions to older PocketMine versions with better stability and performance, while retaining as many features from the new [PocketMine-MP](https://github.com/pmmp/Pocketmine-MP) versions as possible.<br>

<div align="center">
	<h2>Development</h2>
</div>

- <h3>Todo-list:</h3>
- [ ] LevelDB 
- [x] Ender Pearl
- [ ] More Block IDS
- [ ] And more
- <h3>Known bugs:</h3>
  • Players don't fall out of the world naturally, you'll want to handle PlayerMoveEvent as needed to kill them. <br>
  • Some blocks is not placeable/editable.

- <h3>Developers Notes:</h3>
  • Ender Pearl item ids is 422 instead of 368 due some item ids conflict problem.

<div align="center">
	<h2>How to setup?</h2>
</div>

- <h3>Download:</h3>
1. Download latest [release](https://github.com/CoarseMC/Server/releases)
2. Upload it to your server folder.
3. Move to next instruction.

-  <h3>Install:</h3>
1. Follow those [pmmp instructions]( https://pmmp.readthedocs.io/en/rtfd/installation.html).
2. Replace it with Steadfast 3 phar (Don't forget to rename it to `PocketMine-MP`).
3. Start the server.<br>
   Note: If this does not work, join our [discord](https://discord.gg/NzdB7a2EKK) and ask it there.

-  <h3>Update:</h3>
1. Check for any newer updates.
2. Follow those above instructions.

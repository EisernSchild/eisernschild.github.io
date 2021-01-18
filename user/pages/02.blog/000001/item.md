---
title: 2021 - 01 - 18
taxonomy:
    category: blog
---
## Vireio Perception and Corona lockdown

Welcome to my blog !

The last two years i was a bit groggy, so Vireio Perception did stagnate. Due to the Corona lockdowns we had (or still have) i finally have enough time to finalize the driver.

What i did so far : 

### Adding Aquilinus to the Vireio

Aquilinus is a Node-based graphical 3D Modification Studio. That means it bypasses Direct3D (9, 10, 11) to provide any option to change graphics within games.

Any node within Aquilinus represents a plugin. That means that Vireio Perception now is subdivided into different sub-"sections", or nodes.

Following nodes were part of Vireio Perception v4 alpha 1-3:
* Vireio Matrix Modifier (D3D9 + D3D11)
* Vireio Stereo Splitter (D3D9 + D3D11)
* Vireio Stereo Presenter
* Vireio Cinema
* Vireio Constructor (D3D11)
* Oculus (Tracker + DirectMode)
* OpenVR (Tracker + DirectMode)

I will explain the different nodes within this blog.

### Implementing Dear ImGui to Vireio Perception

<a href="https://github.com/ocornut/imgui">Dear ImGui</a> is an excellent option to provide a graphical user interface to any apllication.

I did implement this to Vireio Perception (and Aquilinus in case), so now this makes it greatly user-friendly.
